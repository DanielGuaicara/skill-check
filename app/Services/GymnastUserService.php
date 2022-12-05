<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\GeneratePasswordResource;
use App\Http\Resources\ListGymnastUserCollection;
use App\Interfaces\GymnastUserInterface;

class GymnastUserService
{
    protected $service;

    public function __construct(GymnastUserInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function creates a new gymnast 'user' in database
     *
     * @param array $data An array [email,gym_id]
     *
     * @return mixed
     */

    public function create(array $data)
    {
        $data = $this->service->create($data);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */
    public function list(array $data, int $gymId)
    {
        $data = $this->service->list($data, $gymId);
        return new ListGymnastUserCollection($data);
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int $gymId of a gym
     *
     * @param string $email of user
     *
     * @param string $url for login
     *
     * @return mixed
     */
    public function resendAcountInformation(array $data, int $gymId, string $email)
    {
        $data = $this->service->resendAcountInformation($data, $gymId, $email);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    public function changePasswordFromAdmin(array $data, int $gymId)
    {
        $data = $this->service->changePasswordFromAdmin($data, $gymId);
        if ($data) {
            return new GeneratePasswordResource($data);
        }
        return $data;
    }
}
