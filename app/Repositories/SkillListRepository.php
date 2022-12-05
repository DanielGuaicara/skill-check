<?php

namespace App\Repositories;

use App\Interfaces\SkillListInterface;
use App\SkillList;
use Exception;
use Illuminate\Support\Facades\DB;

class SkillListRepository implements SkillListInterface
{
    protected $skillList;

    public function __construct(SkillList $skillList)
    {
        $this->skillList = $skillList;
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
        try {
            return $this->skillList->create($data);
        } catch (Exception $exc) {
            throw $exc;
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
        $limit = $data['limit'] ?? 15;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        $deleted = isset($data['deleted']) ? ($data['deleted'] === 'true' ? true : false) : false;
        return $deleted ?
            $this->skillList->withTrashed()->where('gym_id', $gymId)->where('deleted_at', '!=', null)->where('name', 'ilike', '%'.$search.'%')->orderBy($column, $order)->paginate($limit) :
            $this->skillList->where('gym_id', $gymId)->where('name', 'ilike', '%'.$search.'%')
                ->orderBy($column, $order)->paginate($limit);
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
        $skillList = $this->skillList->find($id);
        if ($skillList === null) {
            return false;
        }
        return $skillList->load('skills', 'skills.event');
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
        $skillList = $this->skillList->find($id);
        if ($skillList === null) {
            return false;
        }
        $skillList->delete();
        return true;
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
        $skillList = $this->skillList->withTrashed()->where('id', $id)->first();
        if ($skillList === null) {
            return false;
        }
        $skillList->restore();
        return $skillList;
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
        $skillListId = $data['skill_list_id'];
        DB::beginTransaction();
        try {
            $skillList = SkillList::find($skillListId);
            $this->createOrUpdateSkillsInList($skillList, $data);
            DB::commit();
        } catch (Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        return SkillList::find($skillListId)->load('skills');
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
        DB::beginTransaction();
        try {
            $skillList = SkillList::find($skillList);
            $skillList->skills()->detach($skill);
            $this->updateOrderList($skillList);
            DB::commit();
            return true;
        } catch (Exception $exc) {
            DB::rollback();
            throw $exc;
        }
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
    public function update(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $skillList = $this->skillList->find($id);
            if ($skillList === null) {
                return false;
            }
            $skillList->update([
                'gym_id' => $data['gym_id'],
                'name' => $data['name'],
            ]);
            if (isset($data['skill_id'])) {
                $this->createOrUpdateSkillsInList($skillList, $data);
            }
            DB::commit();
            return true;
        } catch (Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    private function updateOrderList($skillList)
    {
        foreach ($skillList->skills as $key => $value) {
            $newArray[$key]['skill_list_id'] = $value->pivot->skill_list_id;
            $newArray[$key]['skill_id'] = $value->pivot->skill_id;
            $newArray[$key]['order'] = $value->pivot->order;
            $arrayOrder[$key]['order'] = $key + 1;
        }
        if ($skillList->skills->isNotEmpty()) {
            $newData = array_replace_recursive($newArray, $arrayOrder);
            $skillList->skills()->detach();
            $skillList->skills()->attach($newData);
        }
    }

    private function createOrUpdateSkillsInList(SkillList $skillList, $data)
    {
        if ($skillList->skills->isEmpty()) {
            return $skillList->skills()->attach($data['skill_id'], ['order' => 1]);
        }

        if (isset($data['order'])) {

            $forUpdated = $skillList->skills()->where('order', $data['order'])->first();
            $kilIdForUpdate = $forUpdated->pivot->skill_id;

            $current = $skillList->skills()->where('skill_id', $data['skill_id'])->first();
            $orderCurrent = $current->pivot->order;

            $skillList->skills()->updateExistingPivot($kilIdForUpdate, [
                'order' => $orderCurrent,
            ]);

            return $skillList->skills()->updateExistingPivot($data['skill_id'], [
                'order' => $data['order'],
            ]);
        }

        $maxOrder = $skillList->skills()->max('order');
        $skillList->skills()->detach($data['skill_id']);
        return $skillList->skills()->attach($data['skill_id'], ['order' => $maxOrder + 1]);
    }
}
