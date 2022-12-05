<?php

namespace App\Interfaces;

interface SkillListInterface
{
    /**
     * This function creates a new 'skill list' in database
     *
     * @param array $data An array [gym_id, name]
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function list 'skill List' per 'gym' in database
     *
     * @param array $data
     *
     * @param int $gymId of gym
     *
     * @return mixed
     */
    public function list(array $data, $gymId);

    /**
     * This function return 'skill list' by id
     *
     * @param int of the skill list for search
     *
     * @return string
     */
    public function show($id);

    /**
     * This function soft delete a 'skill list' in database
     *
     * @param int $id of the skill list for delete
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * This function restore an skill list from softDelete
     *
     * @param string $id of the skill list for restore
     *
     * @return mixed
     */
    public function restore($id);
    /**
     * This function creates a new 'skill list' in database
     *
     * @param array $data An array [kill_list_id, skill_id, order]
     *
     * @param int $gymId of a gym
     *
     * @return mixed
     */
    public function assign(array $data);

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
    public function deleteSkill(int $skillList, int $skill);

    /*
     * This function update a 'skill list' in database
     *
     * @param array $data An array [gym_id, name]
     *
     * @param int $id of the skill list for update
     *
     * @return mixed
     */
    public function update(array $data, int $id);
}
