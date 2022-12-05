<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\SkillResource;
use App\Interfaces\SkillInterface;

class SkillService
{
    protected $service;

    public function __construct(SkillInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function create a new 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->service->create($data);
    }

    /**
     * This function list 'skills' per 'event' of 'gym' in database using softdelete
     *
     * @param int $id of the event for search
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function list($gymId, $id)
    {
        $data = $this->service->list($gymId, $id);
        if ($data) {
            return SkillResource::collection($data);
        }
        return $data;
    }

    /**
     * This function return 'skill' by id
     *
     * @param int of the skill for search
     *
     * @return string
     */
    public function show($id)
    {
        $skill = $this->service->show($id);
        if ($skill) {
            return new SkillResource($skill);
        }
        return $skill;
    }
    /*
     * This function update a 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @param int $id of the skill for update
     *
     * @return mixed
     */
    public function update(array $data, $id)
    {
        return $this->service->update($data, $id);
    }
    /**
     * This function soft delete a 'skill' in database
     *
     * @param int $id of the skill for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        return $this->service->delete($id);
    }
    /**
     * This function update a 'skill' in database
     *
     * @param array $data An array [progress]
     *
     * @param int $memberId of the gymnast for update
     *
     * @param int $skillId of the skill for update
     *
     * @return mixed
     */
    public function updateProgress(array $data, $memberId, $skillId)
    {
        $data = $this->service->updateProgress($data, $memberId, $skillId);
        if ($data) {
            return new DefaultResource($data);
        }
        return false;
    }

}
