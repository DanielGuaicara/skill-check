<?php

namespace App\Services;

use App\Http\Resources\InteractionFeedCollection;
use App\Interfaces\FeedFunctionInterface;

class FeedFunctionService
{
    protected $service;

    public function __construct(FeedFunctionInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function save a feed entry of users who have a birthday
     *
     * @return string
     */
    public function userBirthdayFeedEntry()
    {
        return $this->service->userBirthdayFeedEntry();
    }
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
    public function addFeedinteraction(array $data, int $feedId, string $codeInteraction)
    {
        $data = $this->service->addFeedinteraction($data, $feedId, $codeInteraction);
        return new InteractionFeedCollection($data);
    }

    /**
     * This function add interaction data to feed
     *
     * @param array $data An array [search]
     *
     * @param int $feedId
     *
     * @return string
     */
    public function getFeedinteraction(array $data, int $feedId)
    {
        $data = $this->service->getFeedinteraction($data, $feedId);
        return new InteractionFeedCollection($data);
    }
}
