<?php

namespace App\Interfaces;

interface GymnastInterface
{
    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday]
     *
     * @return mixed
     */
    public function add(array $data, int $gymId);

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday, password]
     *
     * @return mixed
     */
    public function create(array $data, int $gymId);

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, about, timezone]
     *
     * @param int $classId
     *
     * @return mixed
     */
    public function update(array $data, int $gymnastId);

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function list(int $memberId);

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [file]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function profilePicture(string $data, int $memberId);

    /*
     * This function returns all featured 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challenges(int $memberId);

    /*
     * This function returns all regular 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challengesRegular(int $memberId, array $data);

    /*
     * This function update  'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the challengeId of challenge for search
     *
     * @return boolean
     */
    public function updatedChallengePending(int $memberId, int $challengeId);

    /*
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [search] 
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGym(array $data, int $gymId);

    /*
     * This function returns all 'Gymnast' that the gym is allowed àginated
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGymPaginated(array $data, int $gymId);

    /**
     * This function updates a 'gymnast' in database
     *
     * @param array $data An array [id,name,description,settings]
     *
     * @return mixed
     */

    public function updateGymnastAdminSide(array $data, int $gymnastId);

    /**
     * This function delete a 'Gymnast' that the database
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */

    public function deleteGymnast(int $memberId);

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday, password]
     *
     * @return mixed
     */
    public function createGymnastForAdmin(array $data, int $gymId);
}
