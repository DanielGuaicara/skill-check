<?php

namespace App\Repositories;

use App\Event;
use App\Interfaces\SkillInterface;
use App\Skill;
use Exception;
use Illuminate\Support\Facades\DB;

class SkillRepository implements SkillInterface
{
    protected $skill;

    protected $event;

    public function __construct(Skill $skill, Event $event)
    {
        $this->skill = $skill;
        $this->event = $event;
    }

    /**
     * This function creates a new 'skill' in database
     *
     * @param array $data An array [name, description, category_id, level_id, certificate]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        try {
            $this->skill->create($data);
            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
        return false;
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
        $event = $this->event->where('gym_id', $gymId)->where('id', $id)->first();
        if ($event === null) {
            return false;
        }
        return $event->skills;
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
        $skill = $this->skill->find($id);
        if ($skill === null) {
            return false;
        }
        return $skill;
    }

    /**
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
        $skill = $this->skill->find($id);
        if ($skill === null) {
            return false;
        }
        $skill->update($data);
        return true;
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
        $skill = $this->skill->find($id);
        if ($skill === null) {
            return false;
        }
        $skill->delete();
        return true;
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
        $skill = $this->skill->find($skillId);
        try {
            DB::beginTransaction();
            if($skill->gymnasts()->where('gymnast_id', $memberId)->count() > 0) {
                $skill->gymnasts()->updateExistingPivot($memberId, ['progress_status' => $data['progress_status']]);
                DB::commit();
                return true;
            }
            $skill->gymnasts()->attach($memberId, ['progress_status' => $data['progress_status']]);
            DB::commit();
            return true;
        } catch (Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }
}
