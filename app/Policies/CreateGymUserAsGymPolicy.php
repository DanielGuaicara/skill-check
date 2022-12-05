<?php

namespace App\Policies;

use App\Gym;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreateGymUserAsGymPolicy
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
    public function createGymUserAsGym(User $user, $email, $gyms)
    {
        $gymUserBelongsToGym = $this->gymUserHasAccess(User::find($user->id), Gym::find($gyms[0]));
        if (count($gyms) !== 1 || $gymUserBelongsToGym !== true) {
            return false;
        }

        $user = User::withTrashed()->where('email', $email)->exists();

        if (! $user) {
            return true;
        }
        abort(422, 'Invalid User');
    }

    private function gymUserHasAccess(User $user, Gym $gym)
    {
        return $user->gyms()->where('gyms_has_users.user_id', $user->id)
            ->where('gyms_has_users.gym_id', $gym->id)->exists();
    }
}
