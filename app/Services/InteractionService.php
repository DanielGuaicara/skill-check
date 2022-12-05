<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\InteractionResource;
use App\Interfaces\InteractionInterface;

class InteractionService
{
    protected $service;

    public function __construct(InteractionInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @param file $file
     *
     * @return mixed
     */
    public function create(array $data, $file)
    {
        $data = $this->service->create($data, $file);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function returns all 'interactions'
     *
     * @param array $data
     *
     * @return string
     */
    public function list(array $data)
    {
        return InteractionResource::collection($this->service->list($data));
    }

    /**
     * This function delete a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        $data = $this->service->delete($id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function restore a 'interaction' in database using softdelete
     *
     * @param int $id of the interaction for restore
     *
     * @return mixed
     */
    public function restore($id)
    {
        $data = $this->service->restore($id);
        if ($data) {
            return $data;
        }
        return $data;
    }

    /**
     * This function restore a 'interaction' in database using softdelete
     *
     * @param array $data An array
     *
     * @param file $file
     *
     * @param string $code of the interaction for update
     *
     * @return mixed
     */
    public function update(array $data, $file, $code)
    {
        $data = $this->service->update($data, $file, $code);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }
}
