<?php

namespace App\Repositories;

use App\Challenge;
use App\Interfaces\ChallengeAdminInterface;
use Carbon\Carbon;

class ChallengeAdminRepository implements ChallengeAdminInterface
{
    protected $challenge;

    public function __construct(Challenge $challenge)
    {
        $this->challenge = $challenge;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getDailyChallengesAdmin(array $data, $gymId)
    {
        $limit = $data['limit'] ?? 10;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        return $this->challenge::where(function ($query) use ($gymId) {
            $query->where('gym_id', $gymId)
                ->orWhere('gym_id', null);
            })
            ->where('is_featured', true)
            ->where('featured_date', '>=', Carbon::now('UTC')->format('Y-m-d'))
            ->orderBy($column, $order)->paginate($limit);
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
    public function getRegularChallengesAdmin(array $data, $gymId)
    {
        $limit = $data['limit'] ?? 10;
        $column = $data['column'] ?? 'featured_date';
        $order = $data['order'] ?? 'asc';
            return $this->challenge::where(function ($query) use ($gymId) {
                $query->where('gym_id', $gymId)
                    ->orWhere('gym_id', null);
            })
            ->where('is_featured', false)
            ->where(function ($query) {
                $query->where('featured_date', '>=', Carbon::now('UTC')->format('Y-m-d'))
                    ->orWhere('featured_date', '=', null);
            })
            ->orderBy($column, $order)->paginate($limit);
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getAllDailyChallengesAdmin(array $data)
    {
        $limit = $data['limit'] ?? 10;
        $column = $data['column'] ?? 'featured_date';
        $order = $data['order'] ?? 'asc';
        return $this->challenge::where('is_featured', true)
            ->where('featured_date', '>=', Carbon::now('UTC')->format('Y-m-d'))
            ->orderBy($column, $order)->paginate($limit);
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
    public function getAllRegularChallengesAdmin(array $data)
    {
        $limit = $data['limit'] ?? 10;
        $column = $data['column'] ?? 'featured_date';
        $order = $data['order'] ?? 'asc';
        return $this->challenge::where('is_featured', false)
            ->where(function ($query) {
                $query->where('featured_date', '>=', Carbon::now('UTC')->format('Y-m-d'))
                    ->orWhere('featured_date', '=', null);
            })
            ->orderBy($column, $order)->paginate($limit);
    }
}
