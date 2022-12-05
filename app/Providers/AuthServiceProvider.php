<?php

namespace App\Providers;

use App\Policies\CreateGymUserAsGymPolicy;
use App\Policies\CreateOrUpdateAdminUserPolicy;
use App\Policies\DeleteGymUserPolicy;
use App\Policies\EditOrCreateGymUserAsAdminPolicy;
use App\Policies\GymnastUserPolicy;
use App\Policies\GymUserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider  as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('deleteGymUser', [DeleteGymUserPolicy::class, 'deleteGymUser']);
        Gate::define('gymUserHasAccess', [GymUserPolicy::class, 'gymUserHasAccess']);
        Gate::define('getGymUserHasAccess', [GymUserPolicy::class, 'getGymUserHasAccess']);
        Gate::define('createGymUserAsGym', [CreateGymUserAsGymPolicy::class, 'createGymUserAsGym']);
        Gate::define('updateOrCreateGymUserAsAdmin', [EditOrCreateGymUserAsAdminPolicy::class, 'updateOrCreateGymUserAsAdmin']);
        Gate::define('createGymnast', [GymnastUserPolicy::class, 'createGymnast']);
        Gate::define('gymnastUserHasAccess', [GymnastUserPolicy::class, 'gymnastUserHasAccess']);
        Gate::define('checkIfUserIsInactiveAndTaken', [CreateOrUpdateAdminUserPolicy::class, 'checkIfUserIsInactiveAndTaken']);
        Passport::routes();
    }
}
