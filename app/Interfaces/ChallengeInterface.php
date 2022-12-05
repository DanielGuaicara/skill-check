<?php

namespace App\Interfaces;

interface ChallengeInterface
{
    /**
     * This function creates a new 'challenge' in database
     *
     * @param array $data An array [gym_id, class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function creates a new 'challenge Generic' in database
     *
     * @param array $data An array [?class_id, name, decription, points, is_featured, featured_date]
     *
     * @return mixed
     */
    public function createGenericChallenge(array $data);

    /**
     * This function update a 'challenge' in database
     *
     * @param array $data An array [is_featured, featured_date]
     *
     * @param int $id of the challenge for update
     *
     * @return mixed
     */
    public function update(array $data, int $id);

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function list(array $data, int $gymId);

    /**
     * This function soft delete a 'challenge' in database
     *
     * @param int $id of the challenge for delete
     *
     * @return mixed
     */
    public function delete(int $id);

    /**
     * This function list 'challenge' of 'gym' in database
     *
     * @param array $data An array [limit, offset]
     *
     * @return mixed
     */
    public function getAll(array $data);

    /**
     * This function list 'challenge' expired in database
     *
     * @param array $data An array [limit, offset]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function getExpiredChallengesByMember(array $data, $memberId);
}
