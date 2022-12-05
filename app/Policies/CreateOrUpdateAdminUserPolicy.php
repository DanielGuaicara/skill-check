<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreateOrUpdateAdminUserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function checkIfUserIsInactiveAndTaken(User $user, string $email, ?User $userForUpdate)
    {
        $user = User::withTrashed()->where('email', $email)->exists();
        if ($user) {
            $userResult = User::withTrashed()->where('email', $email)->first();
            $isDeleted = $userResult->deleted_at !== null;
            if ($isDeleted) {
                abort(422, 'Inactive User Email.');
            } elseif ($userForUpdate === null || $email !== $userForUpdate->email) {
                abort(422, 'The Email has already been taken.');
            }
        }

        return true;
    }
}
