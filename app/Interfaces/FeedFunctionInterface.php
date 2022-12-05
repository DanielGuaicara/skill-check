<?php

namespace App\Interfaces;

interface FeedFunctionInterface
{
    /**
     * This function returns all 'User birthday Feed Entries'
     *
     * @return string
     */
    public function userBirthdayFeedEntry();
    /**
     * This function add interaction data to feed
     *
     * @param array $data An array [search]
     *
     * @param int $feedId
     *
     * @param int $codeInteraction
     *
     * @return string
     */
    public function addFeedinteraction(array $data, int $feedId, string $codeInteraction);

    /**
     * This function add interaction data to feed
     *
     * @param array $data An array [search]
     *
     * @param int $feedId
     *
     * @return string
     */
    public function getFeedinteraction(array $data, int $feedId);
}
