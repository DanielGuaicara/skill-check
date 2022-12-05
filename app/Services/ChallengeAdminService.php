<?php

namespace App\Services;

use App\Http\Resources\ChallengeCollection;
use App\Interfaces\ChallengeAdminInterface;

class ChallengeAdminService
{
    protected $service;

    public function __construct(ChallengeAdminInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getDailyChallengesAdmin(array $data, $gymId)
    {
        $data = $this->service->getDailyChallengesAdmin($data, $gymId);
        return new ChallengeCollection($data);
    }

    /**
     * This function list 'challenge' expired in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function getRegularChallengesAdmin(array $data, $gymId)
    {
        $data = $this->service->getRegularChallengesAdmin($data, $gymId);
        return new ChallengeCollection($data);
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getAllDailyChallengesAdmin(array $data)
    {
        $data = $this->service->getAllDailyChallengesAdmin($data);
        return new ChallengeCollection($data);
    }

    /**
     * This function list 'challenge' expired in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function getAllRegularChallengesAdmin(array $data)
    {
        $data = $this->service->getAllRegularChallengesAdmin($data);
        return new ChallengeCollection($data);
    }
}
