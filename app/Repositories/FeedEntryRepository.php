<?php

namespace App\Repositories;

use App\FeedEntry;
use App\Gymnast;
use App\Interaction;
use App\Interfaces\FeedEntryInterface;
use Carbon\Carbon;

class FeedEntryRepository implements FeedEntryInterface
{
    /**
     * This function returns all 'Feed Entries'
     *
     * @param array $data An array [limit]
     *
     * @param int $gymId
     *
     * @return string
     */
    public function feedSkill(array $data, $gymId)
    {
        $limit = $data['limit'] ?? 15;
        $offset = $data['offset'] ?? 0;
        $feeds = FeedEntry::join('gymnasts', 'feed_entries.gymnast_id', '=', 'gymnasts.id')
            ->select(['feed_entries.*', 'gymnasts.gyms_has_users_gym_id'])
            ->where('gymnasts.gyms_has_users_gym_id', $gymId)
            ->whereNotNull('feed_entries.created_at')
            ->orderBy('feed_entries.created_at', 'DESC')
            ->orderBy('feed_entries.id', 'DESC')
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
            /*$isFeedAvailable = noDailyChallengesCompleted($value->id, $value->gymnast_id);
            if ($isFeedAvailable) {
                continue;
            }*/
            $min = \Carbon\Carbon::parse($value->created_at)->subHours(1)->toDateTimeString();
            $feedEntry = FeedEntry::find($value->id);
            if (isDaily($feedEntry->data, $feedEntry->type) && 
                allDailyChallenge($feedEntry->gymnast_id, $feedEntry->created_at)) {
                continue;
            }
            $gymnast = Gymnast::find($value->gymnast_id);
            if (isset(auth()->user()->timezone)) {
                $tz = explode(') ', auth()->user()->timezone)[1];
            } else {
                $tz = "America/Chicago";
            }
            $list[$key] = [
                'feed_id' => $value->id,
                'gymnast_id' => $value->gymnast_id,
                'first_name' => $gymnast->first_name,
                'last_name' => $gymnast->last_name,
                'type' => $value->type,
                'image_profile' => $gymnast->image_profile,
                'data' => json_decode($value->data),
                'created_at' => Carbon::parse($value->created_at, 'UTC')->setTimezone($tz),
                'interactions' => dataInteraction($feedEntry),
            ]; 
            if (! in_array($value->type, $typeNotGrouped)) {
                $group = group($min, $value->created_at, $value->gymnast_id, $feedEntry, $ids, $gymId);
            } 
            if (! isset($group['count'])) {
                continue;
            }
            if(isset($group['daily'])) {
                $a = $group;
                unset($a['count']);
                unset($a['ids']);
                unset($a['daily']);
                if (isset($a['daily_challenges_completed'])) {
                    $list[$key]['group'] = $a;
                    unset($list[$key]['data']);
                }
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
        return paginate($myArray, $limit, null, $options);
    }
}
