<?php

namespace App\Services;

use App\Http\Resources\GetMediaFunStuffResource;
use App\Interfaces\FunStuffInterface;

class FunStuffService
{
    protected $service;

    public function __construct(FunStuffInterface $service)
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
    public function getMedia(int $gymId, int $gymnastId)
    {
        $data = $this->service->getMedia($gymId, $gymnastId);
        return new GetMediaFunStuffResource($data);
    }
}
