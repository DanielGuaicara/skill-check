<?php

namespace App\Repositories;

use App\Gym;
use App\Gymnast;
use App\Interfaces\GymnastUserInterface;
use App\Notifications\AcountInformation;
use App\Notifications\ChangePaswordFromAdmin;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GymnastUserRepository implements GymnastUserInterface
{
    protected $gym;

    public function __construct(Gym $gym, User $user)
    {
        $this->gym = $gym;
        $this->user = $user;
    }

    /**
     * This function creates a new Gymnast 'user' in database
     *
     * @param array $data An array [email, gym_id]
     *
     * @return mixed
     */
    public function create(array $data)
    {
        $gymnastUser = $this->user->withTrashed()->whereRaw('lower(email) = ? ', [Str::lower($data['email'])])->with('roles')->first();
        $gym_id = $data['gym_id'];
        $password = Str::random(12);
        $data['name'] = 'GymnastDefault';
        $data['password'] = bcrypt($password);
        try {
            DB::beginTransaction();
            /*if ($gymnastUser !== null) {
                $gymnastUserForUpdate = User::find($gymnastUser->id);
                $array = [];
                $array['password'] = $data['password'];
                $gymnastUserForUpdate->update($array);*/
            //} else {
                $data['email'] = Str::lower($data['email']);
                $gymnastUser = $this->user->create($data);
            //}
                $this->gymnastVerify($gymnastUser, $gym_id);
                $this->addRolUserGymnast($gymnastUser, $gym_id);
            DB::commit();
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        $gymnasts = Gymnast::where('gyms_has_users_user_id', $gymnastUser->id)->get();
        $gym = Gym::find($data['gym_id']);
        if (count($gymnasts) === 0) {
            $data['gym_name'] = $gym->name;
            $data['password'] = $password;
            $data['email'] = $gymnastUser->email;
            $user = User::find($gymnastUser->id);
            $user->notify(new AcountInformation($data));
        }
        return true;
    }
    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [limit]
     *
     * @param int of the gymid for search
     *
     * @return string
     */
    public function list(array $data, int $gymId)
    {
        $limit = $data['limit'] ?? 20;
        $column = $data['column'] ?? 'id';
        $order = $data['order'] ?? 'asc';
        $search = $data['search'] ?? null;
        $ids = DB::table('gyms_has_users')->where('gym_id', $gymId)->pluck('user_id');
        $user = User::role('gymnast')
            ->with('gyms')
            ->whereIn('id', $ids)
            ->Where(function($query) use ($search) {
                $query->where('name', 'ilike', '%'.$search.'%')
                      ->orwhere('email', 'ilike', '%'.$search.'%');
            })
            ->orderBy($column, $order)
            ->paginate($limit);
        $user->map(function ($item) {
            $gymnastsCollection = DB::table('gymnasts')
                ->where('gyms_has_users_user_id', $item->id)
                ->get();
            if (count($gymnastsCollection) > 0) {
                $item->gymnast = true;
            } else {
                $item->gymnast = false;
            }
        });
        return $user;
    }

    /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param int $gymId of a gym
     *
     * @param string $email of user
     *
     * @param string $url for login
     *
     * @return mixed
     */
    public function resendAcountInformation(array $data, int $gymId, string $email)
    {
        $gymnastUser = $this->user->whereRaw('lower(email) = ? ', [Str::lower($email)])->with('roles')->first();
        if (! isset($gymnastUser)) {
            abort(422, 'Inactive/Invalid User');
        }
        $gymnasts = Gymnast::where('gyms_has_users_user_id', $gymnastUser->id)->get();
        $gym = Gym::find($gymId);

        $password = Str::random(12);
        $url = $data['url'];

        $data = [];
        $data['password'] = bcrypt($password);

        try {
            DB::beginTransaction();
            $user = User::find($gymnastUser->id);
            $user->update($data);
            DB::commit();
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
        if (count($gymnasts) === 0) {
            $data['gym_name'] = $gym->name;
            $data['password'] = $password;
            $data['url'] = $url;
            $user->notify(new AcountInformation($data));
        }
        return true;
    }
    
      /**
     * This function returns all 'Gymnast' that the gym is allowed
     *
     * @param array $data An array [email]
     *
     * @param int $gymId of a gym
     *
     * @return mixed
     */
    public function changePasswordFromAdmin(array $data, int $gymId)
    {
        $gymnastUser = $this->user->whereRaw('lower(email) = ? ', [Str::lower($data['email'])])->first();
        if (! isset($gymnastUser)) {
            abort(422, 'Inactive/Invalid User');
        }
        $gym = Gym::find($gymId);
        $password = Str::random(12);
        $url = $data['url'];
        $data = [];
        $data['password'] = bcrypt($password);

      
        try {
            $user = User::find($gymnastUser->id);
            $user->update($data);
        } catch (\Exception $exc) {
            throw $exc;
        }
        $data['password'] = $password;
        $data['url'] = $url;
        $data['gym_name'] = $gym->name;
        //dd($gymnastUser->id);
        $user->notify(new ChangePaswordFromAdmin($data));
        return $password;
   }

    private function gymnastVerify($gymnastUser, $gym_id)
    {
        $exist = false;
        if ($gymnastUser->hasRole('gymnast')) {
            $exist = $gymnastUser->gyms()->where('gyms_has_users.user_id', $gymnastUser->id)
                ->where('gyms_has_users.gym_id', $gym_id)->exists();
        }

        if ($exist) {
            abort(401, 'User was already created as Gymnast');
        }
    }

    private function addRolUserGymnast($gymnastUser, $gym_id)
    {
        $gymnastUser->syncRoles('gymnast');
        $gym = Gym::find($gym_id);
        $gym->users()->detach($gymnastUser->id);
        $gym->users()->attach($gymnastUser->id);
    }

}
