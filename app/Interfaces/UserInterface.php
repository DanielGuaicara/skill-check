<?php

namespace App\Interfaces;

interface UserInterface
{
    /**
     * This function returns all 'users' with admin role active
     *
     * @param array $data An array [limit]
     *
     * @return string
     */

    public function listAdmins(array $data);

    /**
     * This function returns an authentication token for logged user.
     *
     * @return string
     */

    public function getToken();

    /**
     * This function creates a new Admin 'user' in database
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function createAdminUser(array $data);

    /**
     * This function return 'user' by id
     *
     * @param int of the user for search
     *
     * @return string
     */

    public function showAdminUser(int $id);

    /**
     * This function updates a new Admin 'user' in database
     *
     * @param int of the user for update
     *
     * @param array $data An array [name,email, password,repeat_password]
     *
     * @return mixed
     */

    public function updateAdminUser(array $data, int $id);

    /**
     * This function delete an new Admin 'user' in database using softdelete
     *
     * @param int $id of the user for delete
     *
     * @return mixed
     */

    public function deleteAdminUser(int $id);

    /**
     * This function restore an administrator user from softDelete
     *
     * @param string $email of the user for restore
     *
     * @return mixed
     */

    public function restoreAdminUser(string $email);

    /**
     * this function checks the role of the user
     *
     * @param string user $email to check their role
     *
     * @return mixed
     */

    public function checkRole(string $email);

    /**
     * this function checks the role of the user
     *
     * @param string user $email to check their role
     *
     * @return mixed
     */

    public function assignAdmin(string $email);

    /**
     * This function return true when Exist email user
     *
     * @param string $email of the user for restore
     *
     * @return mixed
     */

    public function userEmailExist(string $email);
}
