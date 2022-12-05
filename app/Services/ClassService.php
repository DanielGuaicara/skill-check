<?php

namespace App\Services;

use App\Http\Resources\ClassResource;
use App\Http\Resources\DefaultResource;
use App\Interfaces\ClassInterface;

class ClassService
{
    protected $service;

    public function __construct(ClassInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function creates a new class in database
     *
     * @param array $data An array
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
     * This function delete a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function delete($classId)
    {
        $data = $this->service->delete($classId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }
    /**
     * This function update a class in database
     *
     * @param array $data An array
     *
     * @param int $classId for update
     *
     * @return mixed
     */
    public function update(array $data, int $classId)
    {
        $data = $this->service->update($data, $classId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function restore a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function restore($classId)
    {
        $data = $this->service->restore($classId);
        if ($data) {
            return $data;
        }
        return $data;
    }
    /**
     * This function returns all 'classes'
     *
     * @param int $gymId of gym
     *
     * @return string
     */
    public function list($data, $gymId)
    {
        return $this->service->list($data, $gymId);
    }
    /**
     * This function return a 'class' by id
     *
     * @param int of the class for search
     *
     * @return string
     */
    public function show(int $classId)
    {
        $data = $this->service->show($classId);
        if ($data) {
            return new ClassResource($data);
        }
        return $data;
    }
}
