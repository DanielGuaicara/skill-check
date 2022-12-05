<?php

namespace App\Repositories;

use App\User;
use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * This function returns all 'users' with admin role active
     *
     * @param array $data An array [limit]
     *
     * @return string
     */

    public function listAdmins(array $data)
    {
        $limit = $data['limit'] ?? 10;
        return User::role('admin')->orderby('id')->paginate($limit);
    }

    /**
     * This function returns an authentication token for logged user.
     *
     * @return string
     */

    public function getToken()
    {
        return auth()->user()->createToken('Personal Token');
    }

    /**
     * This function creates a new Admin 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function createAdminUser(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        DB::beginTransaction();
        try {
            $user = $this->user->create($data);
            $user->assignRole('admin');
            DB::commit();
            return $user;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }
    }

    /**
     * This function return 'user' by id
     *
     * @param int of the user for search
     *
     * @return string
     */

    public function showAdminUser(int $id)
    {
        return $this->user->find($id);
    }

    /**
     * This function updates a new Admin 'user' in database
     *
     * @param array $data An array [id,name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function updateAdminUser(array $data, int $id)
    {
        $user = User::find($id);
        if ($user === null) {
            return false;
        }

        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        DB::beginTransaction();
        try {
            $user->update($data);
            if (isset($data['user_role'])) {
                $user->syncRoles($data['user_role']);
            }
            DB::commit();
            return true;
        } catch (\Exception $exc) {
            DB::rollback();
            throw $exc;
        }

        return false;
    }

    /**
     * This function delete an new Admin 'user' in database using softdelete
     *
     * @param int $id of the user for delete
     *
     * @return mixed
     */

    public function deleteAdminUser(int $id)
    {
        $user = $this->user->find($id);
        if ($user !== null) {
            $user->delete();
            return true;
        }
        return false;
    }

    /**
     * This function restore an administrator user from softDelete
     *
     * @param string $email of the user for restore
     *
     * @return mixed
     */

    public function restoreAdminUser(string $email)
    {
        $user = $this->user->withTrashed()->where('email', $email)->first();
        $user->restore();
        return $user;
    }
    /**
     * this function checks the role of the user
     *
     * @param string user $email to check their role
     *
     * @return mixed
     */

    public function checkRole(string $email)
    {
        return $this->user->withTrashed()->where('email', $email)->first();
    }

    /**
     * this function checks the role of the user
     *
     * @param string user $email to check their role
     *
     * @return mixed
     */

    public function assignAdmin(string $email)
    {
        $userForUpdate = User::withTrashed()->where('email', $email)->first();
        $userForUpdate->restore();
        $userForUpdate->syncRoles('admin');
        return true;
    }

    /**
     * This function return true when Exist email user
     *
     * @param string $email of the user for restore
     *
     * @return mixed
     */

    public function userEmailExist(string $email)
    {
        $emailCount = DB::table('users')->whereRaw('lower(email) = ?', [Str::lower($email)])->first();

        if (isset($emailCount)) {
            return $emailCount;
        }
        return false;
    }
}
