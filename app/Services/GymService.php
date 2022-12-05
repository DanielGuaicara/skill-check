<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\ListGymCollection;
use App\Http\Resources\GymForListResource;
use App\Interfaces\GymInterface;

class GymService
{
    protected $service;

    public function __construct(GymInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function returns all 'gyms' by coincidence
     *
     * @param array $data An array [search]
     *
     * @return string
     */

    public function getGym(array $data)
    {
        $data = $this->service->getGym($data);
        return new ListGymCollection($data);
    }

    /**
     * This function creates a new 'gym' in database
     *
     * @param object json
     *
     * @return mixed
     */

    public function create(array $data)
    {
        $data = $this->service->create($data);
        return new DefaultResource($data);
    }

    /**
     * This function returns all 'gyms' that the user is allowed
     *
     * @param array $data An array [limit]
     *
     * @return string
     */

    public function list(array $data)
    {
        $data = $this->service->list($data);
        return new ListGymCollection($data);
    }

    /**
     * This function updates a 'gym' in database
     *
     * @param array $data An array [id,name,description,settings]
     *
     * @return mixed
     */

    public function update(array $data)
    {
        $data = $this->service->update($data);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function delete a 'gym' in database using softdelete
     *
     * @param int $id of the gym for delete
     *
     * @return mixed
     */
    public function delete(int $id)
    {
        $data = $this->service->delete($id);
        if ($data) {
            return new DefaultResource($data);
        }

        return $data;
    }

    /**
     * This function return 'gym' by id
     *
     * @param int of the gym for search
     *
     * @return string
     */

    public function show(int $id)
    {
        return $this->service->show($id);
    }

    /**
     * This function returns all 'gyms' by coincidence
     *
     * @param array $data An array [search]
     *
     * @return string
     */

    public function getGymForList()
    {
        $data = $this->service->getGymForList();
        return new GymForListResource($data);
    }
}
