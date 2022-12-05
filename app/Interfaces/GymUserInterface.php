<?php

namespace App\Interfaces;

interface GymUserInterface
{
    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $GymUserId,$gymId
     *
     * @return mixed
     */
    public function delete(int $gymUserId);

    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $GymId,$gymUserId
     *
     * @return mixed
     */
    public function deleteAsGym(int $gymId, int $gymUserId);

    /**
     * This function creates a new Gym 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function edit a Gym 'user' in database
     *
     * @param int of the user for update
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function edit(array $data, int $id);

    /**
     * This function return 'gymUser' by id
     *
     * @param int of the gymUser for search
     *
     * @return string
     */

    public function get(int $gymUserId);

    /**
     * This function returns all 'gymUsers' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */
    public function listAsGym(array $data, int $id);

    /**
     * This function returns all 'gymUsers' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @return string
     */
    public function listAsAdmin(array $data);
}
