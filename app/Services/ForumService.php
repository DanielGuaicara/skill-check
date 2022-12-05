<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\forumLoginResource;
use App\Interfaces\ForumInterface;

class ForumService
{
    protected $service;

    public function __construct(ForumInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function returns all 'categories'
     *
     * @param int $gymId
     *
     * @param int $gymnastId
     *
     * @return string
     */
    public function forumLogin(array $data)
    {
        $data = $this->service->forumLogin($data);
        if ($data) {
            return new forumLoginResource($data);
        }
        return $data;
    }

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function forumLogout() {
        $data = $this->service->forumLogout();
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }
}
