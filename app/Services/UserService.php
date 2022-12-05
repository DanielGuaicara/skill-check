<?php

namespace App\Services;

use App\Http\Resources\BooleanResource;
use App\Http\Resources\CheckRoleResource;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\GymnastUserResource;
use App\Interfaces\UserInterface;

class UserService
{
    protected $service;

    public function __construct(UserInterface $service)
    {
        $this->service = $service;
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
        return $this->service->listAdmins($data);
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
        $data = $this->service->createAdminUser($data);
        return new DefaultResource($data);
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
        return $this->service->showAdminUser($id);
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
        $data = $this->service->updateAdminUser($data, $id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
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
        $data = $this->service->deleteAdminUser($id);
        if ($data) {
            return new DefaultResource($data);
        }
        return $data;
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
        return $this->service->restoreAdminUser($email);
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
        $data = $this->service->checkRole($email);
        if ($data === null) {
            return $data;
        }
        return new CheckRoleResource($data);
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
        $data = $this->service->assignAdmin($email);
        return new DefaultResource($data);
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
        $data = $this->service->userEmailExist($email);
        if ($data === false) {
            return new BooleanResource($data);
        }
        return new GymnastUserResource($data);
    }
}
