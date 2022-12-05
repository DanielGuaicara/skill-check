<?php

namespace App\Repositories;

use DateTime;
use App\Gymnast;
use DateTimeZone;
use App\Challenge;
use Carbon\Carbon;
use App\Interaction;
use App\InteractionLog;
use App\CompletedChallenge;
use Illuminate\Support\Facades\DB;
use App\Interfaces\DashboardInterface;

class DashboardRepository implements DashboardInterface
{
    /**
     * This function returns all events of a 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function listEvent(int $memberId, int $gymId)
    {
        return DB::table('gymnasts')
            ->join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('skill_lists', 'classes.skill_list_id', '=', 'skill_lists.id')
            ->join('skill_lists_has_skills', 'skill_lists.id', '=', 'skill_lists_has_skills.skill_list_id')
            ->join('skills', 'skill_lists_has_skills.skill_id', '=', 'skills.id')
            ->join('events', 'skills.event_id', '=', 'events.id')
            ->where('gymnasts.id', $memberId)
            ->where('events.gym_id', $gymId)
            ->select('events.*')
            ->distinct()
            ->get();
    }

    /**
     * This function returns all 'timezones'
     *
     * @return string
     */
    public function timezone()
    {
        $timezone_list = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
        $timezones = [];
        foreach ($timezone_list as $val) {
            $this_tz = new DateTimeZone($val);
            $now = new DateTime('now', $this_tz);
            $offset = $this_tz->getOffset($now);
            $offset = $offset /= 3600;
            $timezones[$val] = $offset;
        }
        array_multisort($timezones, SORT_ASC);
        foreach ($timezones as $key1 => $val) {
            $timezones[$key1] = '(GMT/UTC '.$val.':00) '.$key1;
        }
        return $timezones;
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the eventId
     *
     * @return string
     */
    public function listSkill(int $memberId, int $eventId)
    {
        $skills = DB::table('gymnasts')
            ->join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('skill_lists', 'classes.skill_list_id', '=', 'skill_lists.id')
            ->join('skill_lists_has_skills', 'skill_lists.id', '=', 'skill_lists_has_skills.skill_list_id')
            ->join('skills', 'skill_lists_has_skills.skill_id', '=', 'skills.id')
            ->leftJoin('gymnasts_has_skills', 'gymnasts.id', '=', 'gymnasts_has_skills.gymnast_id')
            ->where('gymnasts.id', $memberId)
            ->where('skills.event_id', $eventId)
            ->select('skills.*')
            ->distinct()
            ->get();
        $list = [];
        foreach ($skills as $key => $value) {
            $progress_status = DB::table('gymnasts_has_skills')
                ->where('gymnasts_has_skills.gymnast_id', $memberId)
                ->where('gymnasts_has_skills.skill_id', $value->id)
                ->select('progress_status')
                ->first();
            if (isset($progress_status)) {
                $list[$key] = [
                    'id' => $value->id,'name' => $value->name,
                    'description' => $value->description,'category_id' => $value->category_id,
                    'certificate' => $value->certificate,'event_id' => $value->event_id,
                    'level_id' => $value->level_id,'deleted_at' => $value->deleted_at,
                    'created_at' => $value->created_at,'updated_at' => $value->updated_at,
                    'progress_status' => $progress_status->progress_status,
                ];
            } else {
                $list[$key] = [
                    'id' => $value->id,'name' => $value->name,
                    'description' => $value->description,'category_id' => $value->category_id,
                    'certificate' => $value->certificate,'event_id' => $value->event_id,
                    'level_id' => $value->level_id,'deleted_at' => $value->deleted_at,
                    'created_at' => $value->created_at,'updated_at' => $value->updated_at,
                ];
            }
        }
        return $list;
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function percentage(int $memberId)
    {
        $skills = DB::table('gymnasts')
            ->join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('skill_lists', 'classes.skill_list_id', '=', 'skill_lists.id')
            ->join('skill_lists_has_skills', 'skill_lists.id', '=', 'skill_lists_has_skills.skill_list_id')
            ->join('skills', 'skill_lists_has_skills.skill_id', '=', 'skills.id')
            ->leftJoin('gymnasts_has_skills', 'gymnasts.id', '=', 'gymnasts_has_skills.gymnast_id')
            ->where('gymnasts.id', $memberId)
            ->select('skills.*')
            ->distinct()
            ->get();
        $data = [];
        $search = [];
        foreach ($skills as $key => $value) {
            $progress_status = DB::table('gymnasts_has_skills')
                ->where('gymnasts_has_skills.gymnast_id', $memberId)
                ->where('gymnasts_has_skills.skill_id', $value->id)
                ->select('progress_status')
                ->first();
            if (isset($progress_status)) {
                $data[] = $progress_status->progress_status;
            } else {
                $data[] = 0;
            }
            $collection = collect($data)->countBy();
        }
        if(isset($collection)) {
            $multiplied = $collection->map(function ($item) use ($collection) {
                $total = $collection->sum();
                $total = $item * 100 / $total;
                return round($total, 2);
            });
            $search = [
                'just_starting' => $multiplied[0] ?? 0,
                'learning' => $multiplied[1] ?? 0,
                'can_do' => $multiplied[2] ?? 0,
                'can_do_well' => $multiplied[3] ?? 0,
                'mastered' => $multiplied[4] ?? 0,
            ];
        }
        return $search;
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function getNotifications(array $data, int $memberId)
    {
        $limit = $data['limit']??15;
        $notificationsPending = DB::table('interaction_logs')
            ->join('feed_entries', 'interaction_logs.feed_id', '=', 'feed_entries.id')
            ->join('gymnasts', 'interaction_logs.gymnast_id', '=', 'gymnasts.id')
            ->where('feed_entries.gymnast_id', $memberId)
            ->select('interaction_logs.*',
                'feed_entries.gymnast_id as gymnast_feed',
                'gymnasts.first_name',
                'feed_entries.data', 'feed_entries.type')
            ->orderBy('created_at', 'DESC')
            ->simplePaginate($limit);
        $actived = DB::table('interaction_logs')
            ->join('feed_entries', 'interaction_logs.feed_id', '=', 'feed_entries.id')
            ->where('feed_entries.gymnast_id', $memberId)
            ->where('notified', false)
            ->count();
        if (! $notificationsPending) {
            return [];
        }
        foreach ($notificationsPending as $key => $value) {
            $notificationsPending[$key]->description = descriptionTextNotification($value->data, $value->gymnast_id, $value->type, $value->interaction_id);
            unset($notificationsPending[$key]->data);
            unset($notificationsPending[$key]->deleted_at);
        }
        if (isset(auth()->user()->timezone)) {
            $tz = explode(') ', auth()->user()->timezone)[1];
        } else {
            $tz = "America/Chicago";
        }
        foreach ($notificationsPending as $key => $value) {
            $value->created_at = Carbon::parse($value->created_at, 'UTC')->setTimezone($tz);
        }
        $custom = collect(['notifications_actived' => $actived]);
        return $custom->merge($notificationsPending);
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     * @param int of the gymId
     * 
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function clearNotification(int $memberId, int $notificationId = null)
    {
        if (! $notificationId) {
            $notification = DB::table('interaction_logs')
                ->join('feed_entries', 'interaction_logs.feed_id', '=', 'feed_entries.id')
                ->where('feed_entries.gymnast_id', $memberId)
                ->where('interaction_logs.notified', false)
                ->update(['interaction_logs.notified' => true]);
            return true;
        }
        $notification = InteractionLog::find($notificationId);
        if (! $notification) {
            return false;
        }
        try {
            $notification->update([
                'notified' => true,
            ]);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * This function returns all notifications of 'Gymnast' that the gym is allowed
     *
     *
     * @return string
     */
    public function challengesCount(int $gymId, int $gymnastId)
    {
        $gymnast = Gymnast::find($gymnastId);
        $timezone = explode(') ', auth()->user()->timezone)[1];
        $challenges_id = Gymnast::join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('challenges', 'classes.id', '=', 'challenges.class_id')
            ->select('challenges.id')
            ->where('gymnasts.id', $gymnastId)
            ->whereNull('challenges.deleted_at')
            ->where(function ($query) use ($gymnast, $gymnastId, $timezone){
                $query->where('challenges.gym_id', $gymnast->gyms_has_users_gym_id)
                      ->orWhereRaw('(challenges.gym_id IS NULL
                      AND challenges.is_featured = false
                      OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31) 
                      OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                      AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), Carbon::now($timezone)->format('Y-m-d'), $gymnastId])
                      ->orWhereRaw('challenges.gym_id IS NULL
                      AND challenges.is_featured = true 
                      AND ( challenges.featured_date IS NULL OR challenges.featured_date = ? )
                      AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id
                      AND completed_challenges.date_of_completion IS NOT NULL) = 0', [ Carbon::now($timezone)->format('Y-m-d'), $gymnastId]);
            })
            ->where(function ($query) use ($gymnast, $gymnastId, $timezone){
                $query->whereRaw('(challenges.is_featured = false 
                OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31) 
                OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                AND completed_challenges.challenge_id = challenges.id 
                AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), Carbon::now($timezone)->format('Y-m-d'), $gymnastId])
                ->orWhereRaw('challenges.is_featured = true 
                AND ( challenges.featured_date IS NULL OR challenges.featured_date = ? )
                AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                AND completed_challenges.challenge_id = challenges.id
                AND completed_challenges.date_of_completion IS NOT NULL) = 0', [Carbon::now($timezone)->format('Y-m-d'), $gymnastId]);
            })
            
            
            ->get();
        $challengesWithoutClass = Challenge::where(function ($query) use ($gymnast, $gymnastId, $timezone){
                $query->WhereRaw('(challenges.class_id IS NULL
                    AND (gym_id = ? OR gym_id IS NULL )
                    AND (challenges.is_featured = false 
                        OR ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31))
                    OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                      AND completed_challenges.date_of_completion IS NOT NULL) > 0
                    )', [$gymnast->gyms_has_users_gym_id,Carbon::now($timezone)->format('Y-m-d'),Carbon::now($timezone)->format('Y-m-d'), $gymnastId])
                    ->orWhereRaw('(challenges.class_id IS NULL
                    AND (gym_id = ? OR gym_id IS NULL )
                    AND challenges.is_featured = true
                    AND ( challenges.featured_date IS NULL OR challenges.featured_date = ? )
                    AND (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                    AND completed_challenges.challenge_id = challenges.id
                    AND completed_challenges.date_of_completion IS NOT NULL) = 0)', [$gymnast->gyms_has_users_gym_id, Carbon::now($timezone)->format('Y-m-d'), $gymnastId]);
            })
            ->select('id')
            ->get();
        $merged = $challenges_id->merge($challengesWithoutClass);
        $challenges = Challenge::whereIn('id', $merged)->orderBy('id', 'asc')->get();
        $countTotal = 0;
        foreach ($challenges as $key => $value) {
            $completedChallenge = CompletedChallenge::where('challenge_id', $value->id)
                ->where('gymnast_id', $gymnastId)->first();
            if ($value->featured_date) {
                $difDays = Carbon::createMidnightDate($value->featured_date)->diffInDays(Carbon::now($timezone)->format('Y-m-d'));
                if ($difDays > 0) {
                    continue;
                }
            }
            if ($completedChallenge === null) {
                $countTotal++;
                continue;
            }
        }
        return response()->json(["data" => ["total_challenges" => $countTotal]], 200);
    }
}
