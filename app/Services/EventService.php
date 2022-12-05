<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Interfaces\EventInterface;

class EventService
{
    protected $service;

    public function __construct(EventInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function creates a new 'event' in database
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
     * This function updates a 'event' in database
     *
     * @param array $data An array [gym_id,name,abbrev]
     *
     * @param int $id
     *
     * @return mixed
     */
    public function update(array $data, $id)
    {
        $data = $this->service->update($data, $id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function delete a 'event' in database using softdelete
     *
     * @param int $id of the event for delete
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function delete($gymId, $id)
    {
        $data = $this->service->delete($gymId, $id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function restore a 'event' in database using softdelete
     *
     * @param int $id of the event for restore
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function restore($gymId, $id)
    {
        $data = $this->service->restore($gymId, $id);
        if ($data) {
            return $data;
        }
        return $data;
    }

    /**
     * This function returns all 'events'
     *
     * @param array $data [column, order, search]
     *
     * @param int $gymId of gym belongs the event
     *
     * @return string
     */
    public function list(array $data, $gymId)
    {
        return $this->service->list($data, $gymId);
    }
}
