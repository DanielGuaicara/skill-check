<?php

namespace App\Services;

use App\Http\Resources\DefaultResource;
use App\Http\Resources\SkillListMyListResource;
use App\Http\Resources\SkillListResource;
use App\Http\Resources\SkillListShowResource;
use App\Interfaces\SkillListInterface;

class SkillListService
{
    protected $service;

    public function __construct(SkillListInterface $service)
    {
        $this->service = $service;
    }

    /**
     * This function creates a new 'skill list' in database
     *
     * @param array $data An array [gym_id, name]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        $data = $this->service->create($data);
        if ($data) {
            return new SkillListResource($data);
        }
        return false;
    }

    /**
     * This function list 'skill List' per 'gym' in database
     *
     * @param array $data
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function list(array $data, $gymId)
    {
        return SkillListResource::collection($this->service->list($data, $gymId));
    }

    /**
     * This function return 'skill list' by id
     *
     * @param int of the skill list for search
     *
     * @return string
     */
    public function show($id)
    {
        $data = $this->service->show($id);
        if ($data) {
            return new SkillListShowResource($data);
        }
        return $data;
    }

    /**
     * This function soft delete a 'skill list' in database
     *
     * @param int $id of the skill list for delete
     *
     * @return mixed
     */
    public function delete($id)
    {
        $data = $this->service->delete($id);
        if($data) {
            return new DefaultResource($data);
        }
        return $data;
    }

    /**
     * This function restore an skill list from softDelete
     *
     * @param string $id of the skill list for restore
     *
     * @return mixed
     */
    public function restore($id)
    {
        $data = $this->service->restore($id);
        if($data) {
            return new SkillListResource($data);
        }
        return $data;
    }
    /**
     * This function creates a new 'skill list' in database
     *
     * @param array $data An array [kill_list_id, skill_id, order]
     *
     * @param int $gymId of a gym
     *
     * @return mixed
     */
    public function assign(array $data)
    {
        $data = $this->service->assign($data);
        return new SkillListMyListResource($data);
    }

    /**
     * This function soft delete a 'skill' in database
     *
     * @param int $gymId of a gym
     *
     * @param int $skillList
     *
     * @param int $skill for a list of skill
     *
     * @return mixed
     */
    public function deleteSkill(int $skillList, int $skill)
    {
        $data = $this->service->deleteSkill($skillList, $skill);
        if ($data) {
            return new DefaultResource($data);
        }
        return new SkillListMyListResource($data);
    }

    /*
     * This function update a 'skill list' in database
     *
     * @param array $data An array [gym_id, name]
     *
     * @param int $id of the skill list for update
     *
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        return $this->service->update($data, $id);
    }
}
