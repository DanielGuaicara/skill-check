<?php

namespace App\Interfaces;

interface FeedEntryInterface
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
    public function feedSkill(array $data, $gymId);
}
