<?php

namespace App\Policies;

use App\Gym;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeleteGymUserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function deleteGymUser(User $user, Gym $gym, User $gymUser)
    {
        if (auth()->user()->id === $gymUser->id) {
            return false;
        }
        $hasAccess = $this->gymUserHasAccess($user, $gym);
        $gymUserhasAccess = $this->gymUserHasAccess($gymUser, $gym);
        if ($hasAccess === true && $gymUserhasAccess === true) {
            return true;
        }
        return false;
    }

    private function gymUserHasAccess(User $user, Gym $gym)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
        return $user->gyms()->where('gyms_has_users.user_id', $user->id)
            ->where('gyms_has_users.gym_id', $gym->id)->exists();
    }
}
