<?php

namespace App\Services;

use App\Http\Resources\LevelResource;
use App\Interfaces\LevelInterface;

class LevelService
{
    protected $service;

    public function __construct(LevelInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function returns all 'levels'
     *
     * @return string
     */
    public function list()
    {
        return LevelResource::collection($this->service->list());
    }
}
