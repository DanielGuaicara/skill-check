<?php

namespace App\Services;

use App\Http\Resources\CompletedChallengeResource;
use App\Interfaces\CompletedChallengeInterface;

class CompletedChallengeService
{
    protected $service;

    public function __construct(CompletedChallengeInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function create a new 'completed_challenge' in database
     *
     * @param array $data An array [gymnast_id, challenge_id, media_path, media_caption]
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file)
    {
        $data = $this->service->create($data, $file);
        if ($data) {
            return new CompletedChallengeResource($data);
        }
        return false;
    }

    /**
     * This feature lists all the 'gym' 'challenges' with their completed challenges in the database
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */

    public function feedCarousel($gymId)
    {
        return $this->service->feedCarousel($gymId);
    }

    /**
     * This function list 'challenge Media' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function completedChallengesMediaList(array $data, int $gymId)
    {
        return $this->service->completedChallengesMediaList($data, $gymId);
    }
}
