<?php

namespace App\Interfaces;

interface SkillInterface
{
    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * This function list 'skills' per 'event' of 'gym' in database using softdelete
     *
     * @param int $id of the event for search
     *
     * @param int $gymId of gym belongs the event
     *
     * @return mixed
     */
    public function list($gymId, $id);

    /**
     * This function return 'skill' by id
     *
     * @param int of the skill for search
     *
     * @return string
     */
    public function show($id);
    /**
     * This function update a 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @param int $id of the skill for update
     *
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * This function soft delete a 'skill' in database
     *
     * @param int $id of the skill for delete
     *
     * @return mixed
     */
    public function delete($id);

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
    public function updateProgress(array $data, $memberId, $skillId);
}
