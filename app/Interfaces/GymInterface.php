<?php

namespace App\Interfaces;

interface GymInterface
{
    /**
     * This function returns all 'gyms' by coincidence
     *
     * @param array $data An array [search]
     *
     * @return string
     */

    public function getGym(array $data);

    /**
     * This function creates a new 'gym' in database
     *
     * @param object json
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function returns all 'gyms' that the user is allowed
     *
     * @param array $data An array [limit]
     *
     * @return string
     */

    public function list(array $data);

    /**
     * This function updates a 'gym' in database
     *
     * @param array $data An array [id,name,description,settings]
     *
     * @return mixed
     */

    public function update(array $data);

    /**
     * This function delete a 'gym' in database using softdelete
     *
     * @param int $id of the gym for delete
     *
     * @return mixed
     */

    public function delete(int $id);

    /**
     * This function return 'gym' by id
     *
     * @param int of the gym for search
     *
     * @return string
     */

    public function show(int $id);

    /**
     * This function returns all 'gyms' by coincidence
     *
     * @return string
     */

    public function getGymForList();
}
