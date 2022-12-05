<?php

namespace App\Policies;

use App\Gym;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GymUserPolicy
{
    use HandlesAuthorization;

    public function getGymUserHasAccess(User $user, Gym $gym, int $gymUserId)
    {
        $gymUserBelongsToGym = $this->gymUserHasAccess(User::find($gymUserId), Gym::find($gym->id));
        $userBelongsToGym = $this->gymUserHasAccess(User::find($user->id), Gym::find($gym->id));
        if ($gymUserBelongsToGym === true && $userBelongsToGym === true) {
            return true;
        }
        return false;
    }

    public function gymUserHasAccess(User $user, ?Gym $gym)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
        return $user->gyms()->where('gyms_has_users.user_id', $user->id)
            ->where('gyms_has_users.gym_id', $gym->id)->exists();
    }
}
