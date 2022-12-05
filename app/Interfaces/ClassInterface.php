<?php

namespace App\Interfaces;

interface ClassInterface
{
    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function delete a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function delete($classId);

    /**
     * This function restore a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function restore($classId);
    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @param int $classId for update
     *
     * @return mixed
     */
    public function update(array $data, int $classId);
    /**
     * This function returns all 'classes'
     *
     * @param int $gymId of gym
     *
     * @return string
     */
    public function list(array $daya, int $gymId);
    /**
     * This function return a 'class' by id
     *
     * @param int of the class for search
     *
     * @return string
     */
    public function show(int $classId);
}
