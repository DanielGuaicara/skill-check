<?php

namespace App\Policies;

use App\Gym;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GymnastUserPolicy
{
    use HandlesAuthorization;
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gym  $gym
     * @param   $email
     *
     * @return bool
     */
    public function createGymnast(User $user, Gym $gym, $email)
    {
        $gymnastUserBelongsToGym = $this->gymnastUserHasAccess(User::find($user->id), Gym::find($gym->id));
        if ($gymnastUserBelongsToGym === false) {
            return false;
        }
        $this->isNotDeleted($email, $user);
        return true;
    }
    private function isNotDeleted($email, $user)
    {
        $deleted = User::withTrashed()->where('email', $email)->where('deleted_at', '!=', null)->exists();
        if (! $deleted) {
            return true;
        }
        if ($user->hasRole('gym')) {
            abort(401, 'You are not authorized to add this user, Please Contact an admin');
        }
        abort(401, 'Inactive User');
    }
    public function gymnastUserHasAccess(User $user, Gym $gym)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
        return $user->gyms()->where('gyms_has_users.user_id', $user->id)->where('gyms_has_users.gym_id', $gym->id)->exists();
    }

}
