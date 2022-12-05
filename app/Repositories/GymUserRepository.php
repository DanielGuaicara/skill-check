<?php

namespace App\Repositories;

use App\Gym;
use App\Interfaces\GymUserInterface;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GymUserRepository implements GymUserInterface
{
    protected $gym;

    public function __construct(Gym $gym, User $user)
    {
        $this->gym = $gym;
        $this->user = $user;
    }

    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $id,$gym
     *
     * @return mixed
     */

    public function delete(int $gymUserId)
    {
        $gymUser = User::find($gymUserId);
        if ($gymUser === null) {
            return false;
        }
        $gymUser->delete();
        return true;
    }
    /**
     * This function delete a 'gym User' in database using softdelete
     *
     * @param int $id,$gym
     *
     * @return mixed
     */

    public function deleteAsGym(int $gymId, int $gymUserId)
    {
        $gym = $this->gym->find($gymId);
        $gymUser = User::find($gymUserId);
        return $gym->users()->detach($gymUser->id);
    }

    /**
     * This function creates a new Gym 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password,gym_id]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        $gymUser = $this->user->withTrashed()->whereRaw('lower(email) = ? ', [Str::lower($data['email'])])->with('roles')->first();
        $gyms = $data['gym_id'];
        unset($data['gym_id']);
        unset($data['repeat_password']);
        try {
            DB::beginTransaction();
            if ($gymUser === null) {
                $data['password'] = bcrypt($data['password']);
                $gymUser = $this->user->create($data);
            }
            if ($gymUser->deleted_at !== null) {
                $gymUser->restore();
            }
            $this->addRolUserGymFromAdmin($gymUser, $gyms);
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        return false;
    }

    /**
     * This function creates a new Gym 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password,gym_id]
     *
     * @return mixed
     */

    public function edit(array $data, int $id)
    {
        $user = $this->user->withTrashed()->where('email', $data['email'])->with('roles')->first();
        $gymUserForUpdate = User::find($id);
        $gyms = $data['gym_id'];
        unset($data['gym_id']);
        $data['password'] = bcrypt($data['password']);
        DB::beginTransaction();
        try {
            if ($user !== null && $user->hasAnyRole('gymnast')) {
                $this->addRolUserGymFromAdmin($user, $gyms);
                DB::commit();
                return true;
            }
            $gymUserForUpdate->update($data);
            if (auth()->user()->hasRole('admin')) {
                $gymUserForUpdate->gyms()->detach();
            }
            $this->addRolUserGymFromAdmin($gymUserForUpdate, $gyms);
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            return false;
        }
    }

    /**
     * This function return 'gymUser' by id
     *
     * @param int of the gymUser for search
     *
     * @return string
     */

    public function get(int $gymUserId)
    {
        return User::where('id', $gymUserId)->paginate();
    }

    /**
     * This function returns all 'gymUsers' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */

    public function listAsGym(array $data, int $id)
    {
        $limit = $this->paginateLimit($data);
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        $gym = Gym::find($id);
        return $gym->users()
            ->Where(function($query) use ($search) {
                $query->where('users.name', 'ilike', '%'.$search.'%')
                    ->orwhere('users.email', 'ilike', '%'.$search.'%');
            })
            ->orderBy($column, $order)
            ->paginate($limit);
    }

    public function listAsAdmin(array $data)
    {
        $limit = $this->paginateLimit($data);
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        $ids = DB::table('gyms_has_users')->pluck('user_id');
        return User::role('gym')
            ->with('gyms')
            ->whereIn('id', $ids)
            ->Where(function($query) use ($search) {
                $query->where('users.name', 'ilike', '%'.$search.'%')
                      ->orwhere('users.email', 'ilike', '%'.$search.'%');
            })
            ->orderBy($column, $order)
            ->paginate($limit);
    }

    private function paginateLimit($data)
    {
        return $data['limit'] ?? 20;
    }
    private function addRolUserGymFromAdmin($gymUser, $gym)
    {
        $gymUser->syncRoles('gym');
        foreach ($gym as $value) {
            $gym = Gym::find($value);
            $gym->users()->detach($gymUser->id);
            $gym->users()->attach($gymUser->id);
        }
    }
}
