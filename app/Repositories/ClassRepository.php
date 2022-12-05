<?php

namespace App\Repositories;

use App\ClassModel;
use App\Interfaces\ClassInterface;
use DB;

class ClassRepository implements ClassInterface
{
    protected $class;

    public function __construct(ClassModel $class)
    {
        $this->class = $class;
    }

    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @return mixed
     */
    public function create(array $data)
    {
        try {
            DB::beginTransaction();
            $this->class->create($data);
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        return false;
    }

    /**
     * This function delete a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function delete($classId)
    {
        $class = $this->class->find($classId);
        if ($class === null) {
            return false;
        }
        $class->delete();
        return true;
    }
    /**
     * This function creates a new class in database
     *
     * @param array $data An array
     *
     * @param int $classId for update
     *
     * @return mixed
     */
    public function update(array $data, int $classId)
    {
        $class = $this->class->find($classId);
        if ($class === null) {
            return false;
        }
        $class->update($data);
        return true;
    }
    /**
     * This function restore a 'class' in database using softdelete
     *
     * @param int $classId of the class for retore
     *
     * @return mixed
     */
    public function restore($classId)
    {
        $class = $this->class->withTrashed()->where('id', $classId)->first();
        if ($class === null) {
            return false;
        }
        $class->restore();
        return $class;
    }
    /**
     * This function returns all 'classes'
     *
     * @param int $gymId of gym
     *
     * @return string
     */
    public function list($data, $gymId)
    {
        $deleted = isset($data['deleted']) ? ($data['deleted'] === 'true' ? true : false) : false;
        $limit = $data['limit'] ?? 15;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        if ($deleted) {
            $sql = ClassModel::withTrashed()->whereHas('skillList', function ($query) use ($gymId) {
                $query->where('gym_id', $gymId);
            })->select('id', 'name', 'description', 'skill_list_id')->where('deleted_at', '!=', null)
            ;
            $total = count($sql->get());
        } else {
            $sql = ClassModel::whereHas('skillList', function ($query) use ($gymId) {
                $query->where('gym_id', $gymId);
            })->select('id', 'name', 'description', 'skill_list_id');
            $total = count($sql->get());
        }
        return $sql->Where(function($query) use ($search) {
            $query->where('name', 'ilike', '%'.$search.'%')
                  ->orwhere('description', 'ilike', '%'.$search.'%');
        })->orderBy($column, $order)->paginate($limit);
    }
    /**
     * This function return a 'class' by id
     *
     * @param int of the class for search
     *
     * @return string
     */
    public function show(int $classId)
    {
        $class = $this->class->find($classId);
        if ($class === null) {
            return false;
        }
        return $class;
    }
}
