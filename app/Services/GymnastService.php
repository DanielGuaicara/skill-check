<?php

namespace App\Services;

use App\Http\Resources\BooleanResource;
use App\Http\Resources\ChallengeRegularResource;
use App\Http\Resources\ChallengeResource;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\GymnastMemberResource;
use App\Http\Resources\ImageProfileResource;
use App\Http\Resources\ShowGymnastResource;
use App\Http\Resources\ShowMemberResource;
use App\Interfaces\GymnastInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class GymnastService
{
    protected $service;

    public function __construct(GymnastInterface $service)
    {
        $this->service = $service;
    }
    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday]
     *
     * @return mixed
     */
    public function add(array $data, int $gymId)
    {
        $data = $this->service->add($data, $gymId);
        if ($data) {
            return new GymnastMemberResource($data);
        }
        return $data;
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday, password]
     *
     * @return mixed
     */
    public function create(array $data, int $gymId)
    {
        if (Hash::check($data['password'], auth()->user()->password)) {
            $data = $this->service->create($data, $gymId);
        } else {
            abort(422, Lang::get('messages.auth_login_422_password'));
        }
        if ($data) {
            return new GymnastMemberResource($data);
        }
        return $data;
    }

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, about, timezone]
     *
     * @param int $classId
     *
     * @return mixed
     */
    public function update(array $data, int $gymnastId)
    {
        $data = $this->service->update($data, $gymnastId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function list(int $memberId)
    {
        $data = $this->service->list($memberId);
        return new ShowGymnastResource($data);
    }

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [file]
     *
     * @param int $memberId
     *
     * @return mixed
     */
    public function profilePicture(string $data, int $memberId)
    {
        $data = $this->service->profilePicture($data, $memberId);
        if ($data) {
            return new ImageProfileResource($data);
        }
        return $data;
    }
    /*
     * This function returns all featured 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challenges(int $memberId)
    {
        $data = $this->service->challenges($memberId);
        return ChallengeResource::collection($data);
    }

    /*
     * This function returns all regular 'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */
    public function challengesRegular(int $memberId, array $data)
    {
        $data = $this->service->challengesRegular($memberId, $data);
        return ChallengeRegularResource::collection($data);
    }

    /*
     * This function update  'Challenges' that the gym is allowed
     *
     * @param int of the memberId of gymnast for search
     *
     * @param int of the challengeId of challenge for search
     *
     * @return boolean
     */
    public function updatedChallengePending(int $memberId, int $challengeId)
    {
        $data = $this->service->updatedChallengePending($memberId, $challengeId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /*
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [search, order, column] 
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGym(array $data, int $gymId)
    {
        $data = $this->service->getMemberByGym($data, $gymId);
        if ($data) {
            return new ShowMemberResource($data);
        }
        return $data;
    }

    /*
     * This function returns all 'Gymnast' that the gym is allowed Paginated
     *
     * @param int of the gymId of gymnast for search
     *
     * @return string
     */
    public function getMemberByGymPaginated(array $data, int $gymId)
    {
        $data = $this->service->getMemberByGymPaginated($data, $gymId);
        if ($data) {
            return new ShowMemberResource($data);
        }
        return $data;
    }

    /**
     * This function update a Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, about, timezone]
     *
     * @param int $classId
     *
     * @return mixed
     */
    public function updateGymnastAdminSide(array $data, int $gymnastId)
    {
        $data = $this->service->updateGymnastAdminSide($data, $gymnastId);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function delete a 'Gymnast' that the database
     *
     * @param int of the memberId of gymnast for search
     *
     * @return string
     */

    public function deleteGymnast(int $memberId)
    {
        $data = $this->service->deleteGymnast($memberId);
        return new BooleanResource($data);
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [firstname, last_name, birthday]
     *
     * @return mixed
     */
    public function createGymnastForAdmin(array $data, int $gymId)
    {
        $data = $this->service->createGymnastForAdmin($data, $gymId);
        return new GymnastMemberResource($data);
    }
}
