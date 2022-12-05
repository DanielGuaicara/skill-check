<?php

namespace App\Services;

use App\Http\Resources\ChallengeCollection;
use App\Http\Resources\ChallengeExpiredCollection;
use App\Http\Resources\ChallengeResource;
use App\Http\Resources\DefaultResource;
use App\Interfaces\ChallengeInterface;

class ChallengeService
{
    protected $service;

    public function __construct(ChallengeInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function creates a new 'challenge' in database
     *
     * @param array $data An array [gym_id, class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        $data = $this->service->create($data);
        if ($data) {
            return new ChallengeResource($data);
        }
        return false;
    }

    /**
     * This function creates a new 'challenge Generic' in database
     *
     * @param array $data An array [?class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function createGenericChallenge(array $data)
    {
        $data = $this->service->createGenericChallenge($data);
        if ($data) {
            return new ChallengeResource($data);
        }
        return false;
    }

    /**
     * This function update a 'challenge' in database
     *
     * @param array $data An array [is_featured, featured_date]
     *
     * @param int $id of the challenge for update
     *
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        $data = $this->service->update($data, $id);
        if ($data) {
            return new DefaultResource($data);
        }
        return false;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function list(array $data, int $gymId)
    {
        return new ChallengeCollection($this->service->list($data, $gymId));
    }

    /**
     * This function soft delete a 'challenge' in database
     *
     * @param int $id of the challenge for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        $data = $this->service->delete($id);
        if ($data) {
            return new DefaultResource($data);
        }
        return false;
    }

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getAll(array $data)
    {
        return new ChallengeCollection($this->service->getAll($data));
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
    public function getExpiredChallengesByMember(array $data, $memberId)
    {
        $data = $this->service->getExpiredChallengesByMember($data, $memberId);
        return new ChallengeExpiredCollection($data);
    }
}
