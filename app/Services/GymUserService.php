<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\ListGymUserCollection;
use App\Interfaces\GymUserInterface;

class GymUserService
{
    protected $service;

    public function __construct(GymUserInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $id
     *
     * @return mixed
     */

    public function delete(int $gymUserId)
    {
        $data = $this->service->delete($gymUserId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $id,$gym
     *
     * @return mixed
     */

    public function deleteAsGym(int $gymId, int $gymUserId)
    {
        $data = $this->service->deleteAsGym($gymId, $gymUserId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function creates a new gym 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password,gym_id]
     *
     * @return mixed
     */

    public function create(array $data)
    {
        $data = $this->service->create($data);
        if ($data === true) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function edit a Gym 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function edit(array $data, int $id)
    {
        $data = $this->service->edit($data, $id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function return 'gymUser' by id
     *
     * @param int of the gymUser for search
     *
     * @return string
     */

    public function get(int $gymUserId)
    {
        $data = $this->service->get($gymUserId);
        if ($data) {
            return new ListGymUserCollection($data);
        }
        return false;
    }

    /**
     * This function returns all 'gymUsers' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */

    public function listAsGym(array $data, int $id)
    {
        $data = $this->service->listAsGym($data, $id);
        return new ListGymUserCollection($data);
    }

    /**
     * This function returns all 'gymUsers' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */

    public function listAsAdmin(array $data)
    {
        $data = $this->service->listAsAdmin($data);
        return new ListGymUserCollection($data);
    }
}
