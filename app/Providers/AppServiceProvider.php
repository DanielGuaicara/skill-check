<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Interfaces\UserInterface',
            'App\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Interfaces\GymInterface',
            'App\Repositories\GymRepository'
        );
        $this->app->bind(
            'App\Interfaces\GymUserInterface',
            'App\Repositories\GymUserRepository'
        );
        $this->app->bind(
            'App\Interfaces\GymnastUserInterface',
            'App\Repositories\GymnastUserRepository'
        );
        $this->app->bind(
            'App\Interfaces\EventInterface',
            'App\Repositories\EventRepository'
        );
        $this->app->bind(
            'App\Interfaces\SkillInterface',
            'App\Repositories\SkillRepository'
        );
        $this->app->bind(
            'App\Interfaces\LevelInterface',
            'App\Repositories\LevelRepository'
        );
        $this->app->bind(
            'App\Interfaces\CategoryInterface',
            'App\Repositories\CategoryRepository'
        );
        $this->app->bind(
            'App\Interfaces\SkillListInterface',
            'App\Repositories\SkillListRepository'
        );
        $this->app->bind(
            'App\Interfaces\GymnastInterface',
            'App\Repositories\GymnastRepository'
        );
        $this->app->bind(
            'App\Interfaces\ClassInterface',
            'App\Repositories\ClassRepository'
        );
        $this->app->bind(
            'App\Interfaces\ChallengeInterface',
            'App\Repositories\ChallengeRepository'
        );
    }
}
