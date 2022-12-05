<?php

namespace App\Interfaces;

interface GymnastUserInterface
{
    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [email, gym_id]
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */
    public function list(array $data, int $id);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [url]
     *
     * @param int $gymId of a gym
     *
     * @param string $email of user
     *
     * @return mixed
     */
    public function resendAcountInformation(array $data, int $gymId, string $email);

     /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [email]
     *
     * @param int $gymId of a gym
     *
     * @return mixed
     */
    public function changePasswordFromAdmin(array $data, int $gymId);
    
}
