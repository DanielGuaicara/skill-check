<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceExtraProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Interfaces\DashboardInterface',
            'App\Repositories\DashboardRepository'
        );

        $this->app->bind(
            'App\Interfaces\FeedEntryInterface',
            'App\Repositories\FeedEntryRepository'
        );
        $this->app->bind(
            'App\Interfaces\FeedEntryInterface',
            'App\Repositories\FeedEntryRepository'
        );
        $this->app->bind(
            'App\Interfaces\CompletedChallengeInterface',
            'App\Repositories\CompletedChallengeRepository'
        );
        $this->app->bind(
            'App\Interfaces\InteractionInterface',
            'App\Repositories\InteractionRepository'
        );
        $this->app->bind(
            'App\Interfaces\FeedFunctionInterface',
            'App\Repositories\FeedFunctionRepository'
        );
        $this->app->bind(
            'App\Interfaces\LeaderboardInterface',
            'App\Repositories\LeaderboardRepository'
        );
        $this->app->bind(
            'App\Interfaces\ForgotPasswordInterface',
            'App\Repositories\ForgotPasswordRepository'
        );
        $this->app->bind(
            'App\Interfaces\StripePaymentInterface',
            'App\Repositories\StripePaymentRepository'
        );
        $this->app->bind(
            'App\Interfaces\FunStuffInterface',
            'App\Repositories\FunStuffRepository'
        );
        $this->app->bind(
            'App\Interfaces\ForumInterface',
            'App\Repositories\ForumRepository'
        );
        $this->app->bind(
            'App\Interfaces\ChallengeAdminInterface',
            'App\Repositories\ChallengeAdminRepository'
        );
        $this->app->bind(
            'App\Interfaces\NotificationInterface',
            'App\Repositories\NotificationRepository'
        );
    }
}
