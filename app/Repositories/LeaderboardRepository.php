<?php

namespace App\Repositories;

use App\Gym;
use App\User;
use App\Gymnast;
use App\Challenge;
use App\FeedEntry;
use Carbon\Carbon;
use App\InteractionLog;
use App\CompletedChallenge;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Interfaces\LeaderboardInterface;

class LeaderboardRepository implements LeaderboardInterface
{
    /**
     * This function returns info for leaderBoard
     *
     * @param int $gymId
     *
     * @return string
     */
    public function leaderboardInfo(int $gymId)
    {
        $gym = Gym::find($gymId);
        return Gymnast::where('gyms_has_users_gym_id', $gymId)
            ->where('ongoing_points', '!=', 0)
            ->orderBy('ongoing_points', 'DESC')
            ->limit($gym->settings->leaderboard_top)
            ->get();
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the $gymId
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function leaderboardProfile(array $data, int $gymId, int $memberId)
    {
        $gymnasts = Gymnast::find($memberId);
        $gymnasts->load(['classes', 'user']);
        if(substr($gymnasts->image_profile, 0, 23) === "../img/profile_pictures"){
            $gymnasts->image_profile = config('app.api_url').'/media'.Str::substr($gymnasts->image_profile,2);
        }
        $percentage = percentage($memberId);
        $grafScore = $this->getSportmanshipScore($memberId);
        $limit = $data['limit'] ?? 15;
        $offset = $data['offset'] ?? 0;
        $feeds = FeedEntry::join('gymnasts', 'feed_entries.gymnast_id', '=', 'gymnasts.id')
            ->select(['feed_entries.*', 'gymnasts.gyms_has_users_gym_id'])
            ->where('gymnasts.gyms_has_users_gym_id', $gymId)
            ->where('gymnasts.id', $memberId)
            ->whereNotNull('feed_entries.created_at')
            ->orderBy('feed_entries.created_at', 'DESC')
            ->offset($offset)
            ->limit(30)
            ->get();
        $ids = [];
        $list = [];
        $typeNotGrouped = [1,3,5];
        foreach ($feeds as $key => $value) {
            if ($key !== 0 && in_array($value->id, $ids)) {
                continue;
            }
            array_push($ids, $value->id);
            $feedEntry = FeedEntry::find($value->id);
            $min = \Carbon\Carbon::parse($value->created_at)->subHours(1)->toDateTimeString();
            if (isDaily($value->data, $value->type)) {
                continue;
            }
            $feedEntry = FeedEntry::find($value->id);
            $list[$key] = [
                'feed_id' => $value->id,
                'gymnast_id' => $value->gymnast_id,
                'first_name' => $gymnasts->first_name,
                'last_name' => $gymnasts->last_name,
                'type' => $value->type,
                'image_profile' => $gymnasts->image_profile,
                'data' => json_decode($value->data),
                'created_at' => $value->created_at,
                'interactions' => dataInteraction($value),
            ];
            if (! in_array($value->type, $typeNotGrouped)) {
                $group = group($min, $value->created_at, $value->gymnast_id, $feedEntry, $ids, $gymId);
            }
            if (! isset($group['count'])) {
                continue;
            }
            if(isset($group['daily'])) {
                unset($list[$key]['data']);
            }
            if($group['count'] > 1) {
                $list[$key]['group'] = $group['list'];
                unset($ids);
                $ids = $group['ids'];
                unset($group);
                unset($list[$key]['data']);
            } else {
                unset($ids);
                $ids = $group['ids'];
                unset($group);
            }
        }
        $myArray = collect($list);
        $options = ['path' => \Request::url()];
        $latest_activity = paginate($myArray, $limit, null, $options);
        $response = [
            'gymnast' => $gymnasts,
            'percentage' => $percentage,
            'meter_value' => $grafScore,
            'latest_activity' => $latest_activity,
        ];
        $response['gymnast']->email_gymnast = $gymnasts->user->email;
        return $response;
    }

    public function clearLeaderBoard(int $gymId)
    {
        try {
            DB::beginTransaction();
            Gymnast::where('gyms_has_users_gym_id', $gymId)->update([
                'ongoing_points' => 0,
            ]);
            $gym = Gym::find($gymId);
            $gym->update(['leaderboard_cleanup_date' => Carbon::now("America/Chicago")->format('Y-m-d')]);
            $completedChallenges = CompletedChallenge::all();
            foreach ($completedChallenges as $key => $value) {
                $member = Gymnast::find($value->gymnast_id);
                if (! isset($member)) {
                    continue;
                }
                if ($member->gyms_has_users_gym_id === $gymId) {
                    CompletedChallenge::where('id', $value->id)->delete();
                }
            }
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    private function getSportmanshipScore($member_id) {
        $member_score_interactions = $this->getMemberInteractionScore($member_id);
        if ($member_score_interactions > 19) {
            $meterValue = 87.5;
        } elseif ($member_score_interactions > 9 && $member_score_interactions < 20) {
            $meterValue = 62.5;
        } elseif ($member_score_interactions > 0 && $member_score_interactions < 10) {
            $meterValue = 37.5;
        } else {
            $meterValue = 12.5;
        }
        return $meterValue;
    }

    private function getMemberInteractionScore($member_id)
    {
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $min = Carbon::now($timezone)->subDays(30)->toIso8601String();
        $max = Carbon::now($timezone)->toIso8601String();
        $totalMedias = FeedEntry::where('gymnast_id', $member_id)
            ->where('data->media_path', '!=', null)
            ->where('type', 2)
            ->whereBetween('created_at', [$min, $max])
            ->orderBy('created_at', 'DESC')
            ->count();
        $totalInteractions = InteractionLog::where('gymnast_id', $member_id)
            ->whereBetween('created_at', [$min, $max])
            ->orderBy('created_at', 'DESC')
            ->count();
        /*$totalInteractions = 0;
        foreach($feeds as $value) {
            $count = $this->countInteraction(json_decode($value->interactions), $member_id, $min, $max);
            $totalInteractions = $totalInteractions += $count;
        }*/
        return $totalInteractions + $totalMedias;
    }

    private function countInteraction(array $interactions, int $member_id, string $min, string $max)
    {
        $count = 0;
        foreach($interactions as $value ) {
            $date = Carbon::create($value->created_at)->betweenIncluded($min, $max);
            if($value->member_id === $member_id && $date === true) {
                $count++;
            }
        }
        return $count;
    }
}
