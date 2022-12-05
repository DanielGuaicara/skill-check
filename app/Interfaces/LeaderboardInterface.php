<?php

namespace App\Interfaces;

interface LeaderboardInterface
{
    /**
     * This function returns info for leaderBoard
     *
     * @param int $gymId
     *
     * @return string
     */
    public function leaderboardInfo(int $gymId);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the $gymId
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function leaderboardProfile(array $data, int $gymId, int $memberId);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the $gymId
     *
     * @return string
     */
    public function clearLeaderboard(int $gymId);
}
