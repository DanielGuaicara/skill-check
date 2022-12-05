<?php

namespace App\Repositories;

use App\User;
use App\Gym;
use Exception;
use App\Gymnast;
use App\Challenge;
use Carbon\Carbon;
use App\CompletedChallenge;
use App\Interfaces\ChallengeInterface;

class ChallengeRepository implements ChallengeInterface
{
    protected $challenge;

    public function __construct(Challenge $challenge)
    {
        $this->challenge = $challenge;
    }

    /**
     * This function creates a new 'challenge' in database
     *
     * @param array $data An array [gym_id, class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        try {
            return $this->challenge->create($data);
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }

    /**
     * This function creates a new 'challenge Generic' in database
     *
     * @param array $data An array [?class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function createGenericChallenge(array $data)
    {
        try {
            return $this->challenge->create($data);
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
    }

    /**
     * This function update a 'challenge' in database
     *
     * @param array $data An array [is_featured, featured_date]
     *
     * @param int $id of the challenge for update
     *
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        $challenge = $this->challenge->find($id);
        if ($challenge === null) {
            return false;
        }
        $challenge->update($data);
        return true;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function list(array $data, int $gymId)
    {
        $limit = $data['limit'] ?? 10;
        return $this->challenge
            ->where('gym_id', $gymId)
            ->orWhere('gym_id', null)->paginate($limit);
    }

    /**
     * This function soft delete a 'challenge' in database
     *
     * @param int $id of the challenge for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        $challenge = $this->challenge->find($id);
        if ($challenge === null) {
            return false;
        }
        $challenge->delete();
        return true;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getAll(array $data)
    {
        $limit = $data['limit'] ?? 10;
        return $this->challenge::where('featured_date', '>=', Carbon::now('UTC')->format('Y-m-d'))
            ->orWhere('featured_date', '=', null)
            ->orderBy('featured_date')->paginate($limit);
    }

    /**
     * This function list 'challenge' expired in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function getExpiredChallengesByMember(array $data, $memberId)
    {
        $limit = $data['limit'] ?? 100;
        $search = $data['search'] ?? null;
        $gymnast = Gymnast::find($memberId);
        $gym = Gym::find($gymnast->gyms_has_users_gym_id);
        $timezone = config('app.time_zone_admin_default');
        $column = $data['column'] ?? 'featured_date';
        $order = $data['order'] ?? 'asc';
        if (! isset($search)) {
            $challenges_id = Gymnast::join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
                ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
                ->join('challenges', 'classes.id', '=', 'challenges.class_id')
                ->select('challenges.id')
                ->where('gymnasts.id', $memberId)
                ->whereNull('challenges.deleted_at')
                ->where(function ($query) use ($gymnast, $memberId, $timezone, $gym){
                    $query->where('challenges.gym_id', $gymnast->gyms_has_users_gym_id)
                        ->orWhereRaw('(challenges.gym_id IS NULL
                        AND ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ?)
                        OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                        AND completed_challenges.challenge_id = challenges.id 
                        AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                        AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId]);
                })
                ->whereRaw('(challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ?
                    OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                    AND completed_challenges.challenge_id = challenges.id 
                    AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                    AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now($timezone)->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId])
                ->get();
            $challengesWithoutClass = Challenge::where(function ($query) use ($gymnast, $memberId, $timezone, $gym){
                    $query->WhereRaw('(challenges.class_id IS NULL
                        AND (gym_id = ? OR gym_id IS NULL )
                        AND (challenges.is_featured = true AND ? - challenges.featured_date > 0 AND challenges.featured_date > ? )
                        OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                        AND completed_challenges.challenge_id = challenges.id 
                        AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL
                        AND challenges.featured_date > ? 
                        AND completed_challenges.date_of_completion IS NOT NULL) > 0
                        )', [$gymnast->gyms_has_users_gym_id, Carbon::now($timezone)->format('Y-m-d'), $gym->leaderboard_cleanup_date, $memberId, $gym->leaderboard_cleanup_date]);
            })
            ->select('id')
            ->get();
            $merged = $challenges_id->merge($challengesWithoutClass);
            $challenges = Challenge::whereIn('id', $merged)->orderBy($column, $order)->paginate($limit);
            foreach ($challenges as $key => $value) {
                $completedChallenge = CompletedChallenge::where('challenge_id', $value->id)
                    ->where('gymnast_id', $memberId)->first();
                if ($completedChallenge === null) {
                    $challenges[$key]['date_of_completion'] = null;
                    continue;
                } else {
                    unset($challenges[$key]);
                }
            }
            return $challenges;
        }
        $member = Gymnast::find($memberId);
        $challenges_id = Gymnast::join('gymnasts_has_classes', 'gymnasts.id', '=', 'gymnasts_has_classes.gymnast_id')
            ->join('classes', 'gymnasts_has_classes.class_id', '=', 'classes.id')
            ->join('challenges', 'classes.id', '=', 'challenges.class_id')
            ->select('challenges.id')
            ->where('gymnasts.id', $memberId)
            ->whereNull('challenges.deleted_at')
            ->Where(function($query) use ($search) {
                $query->where('challenges.name', 'like', '%'.$search.'%')
                      ->orwhere('challenges.description', 'like', '%'.$search.'%');
            })
            ->where(function ($query) use ($member, $memberId){
                $query->where('challenges.gym_id', $member->gyms_has_users_gym_id)
                      ->orWhereRaw('(challenges.gym_id IS NULL
                      AND ( challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31)
                      OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                      AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now('UTC')->format('Y-m-d'), Carbon::now('UTC')->format('Y-m-d'), $memberId]);
            })
            ->whereRaw('(challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31
                OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                AND completed_challenges.challenge_id = challenges.id 
                AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                AND completed_challenges.date_of_completion IS NOT NULL) > 0)', [Carbon::now('UTC')->format('Y-m-d'), Carbon::now('UTC')->format('Y-m-d'), $memberId])
            ->get();
        $challengesWithoutClass = Challenge::where(function ($query) use ($member, $memberId){
                $query->WhereRaw('(challenges.class_id IS NULL
                    AND (gym_id = ? OR gym_id IS NULL )
                    AND (challenges.is_featured = true AND ? - challenges.featured_date > 0 AND ? - challenges.featured_date < 31 )
                    OR (select count (*) from completed_challenges where completed_challenges.gymnast_id = ?
                      AND completed_challenges.challenge_id = challenges.id 
                      AND challenges.is_featured = true AND challenges.featured_date IS NOT NULL 
                      AND completed_challenges.date_of_completion IS NOT NULL) > 0
                    )', [$member->gyms_has_users_gym_id, Carbon::now('UTC')->format('Y-m-d'), Carbon::now('UTC')->format('Y-m-d'), $memberId]);
        })
        ->Where(function($query) use ($search) {
            $query->where('challenges.name', 'ilike', '%'.$search.'%')
                  ->orwhere('challenges.description', 'ilike', '%'.$search.'%');
        })
        ->select('id')
        ->get();
        $merged = $challenges_id->merge($challengesWithoutClass);
        $challenges = Challenge::whereIn('id', $merged)->orderBy($column, $order)->paginate($limit);
        foreach ($challenges as $key => $value) {
            $completedChallenge = CompletedChallenge::where('challenge_id', $value->id)
                ->where('gymnast_id', $memberId)->first();
            if ($completedChallenge === null) {
                $challenges[$key]['date_of_completion'] = null;
                continue;
            } else {
                unset($challenges[$key]);
            }
            //$date = Carbon::parse($completedChallenge->date_of_completion)->format('Y-m-d H:i:s');
            //$challenges[$key]['date_of_completion'] = Carbon::parse($date)->setTimezone('UTC');
        }
        return $challenges;
    }
}
