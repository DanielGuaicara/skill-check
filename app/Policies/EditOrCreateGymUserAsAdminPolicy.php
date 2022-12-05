<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EditOrCreateGymUserAsAdminPolicy
{
    use HandlesAuthorization;
    public function updateOrCreateGymUserAsAdmin(User $user, $email, string $ability, ?int $id = null)
    {
        $userExists = User::withTrashed()->where('email', $email)->exists();
        if (! $userExists) {
            return true;
        }

        $gymUser = User::withTrashed()->where('email', $email)->first();
        if ($gymUser->hasAnyRole(['admin'])) {
            abort(422, 'The Email belongs to administrator user.');
        }
        if ($ability === 'create') {
            return true;
        }
        $isDeleted = $gymUser->deleted_at !== null;
        if ($isDeleted) {
            abort(401, 'Inactive User Email.');
        }
        $user = User::find($id);
        if ($user->email !== $email && $gymUser->hasAnyRole(['gym'])) {
            abort(401, 'The Email has already been taken.');
        }

        return true;
    }
}
