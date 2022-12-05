<?php

namespace App\Services;

use App\Http\Resources\ListFeedCollection;
use App\Interfaces\FeedEntryInterface;

class FeedEntryService
{
    protected $service;

    public function __construct(FeedEntryInterface $service)
    {
        $this->service = $service;
    }
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
        $data = $this->service->feedSkill($data, $gymId);
        return new ListFeedCollection($data);
    }
}
