<?php

namespace App\Services;

use App\Http\Resources\LeaderboardResource;
use App\Http\Resources\LeaderboardProfileResource;
use App\Interfaces\LeaderboardInterface;

class LeaderboardService
{
    protected $service;

    public function __construct(LeaderboardInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function leaderboardInfo(int $gymId)
    {
        $data = $this->service->leaderboardInfo($gymId);
        return LeaderboardResource::collection($data);
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
        $data = $this->service->leaderboardProfile($data, $gymId, $memberId);
        return new LeaderboardProfileResource($data);
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the $gymId
     *
     * @return string
     */
    public function clearLeaderBoard(int $gymId)
    {
        return $this->service->clearLeaderBoard($gymId);
    }
}
