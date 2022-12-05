<?php

namespace App\Providers;

use App\Challenge;
use App\CompletedChallenge;
use App\Notification;
use App\Observers\ChallengeObserver;
use App\Observers\CompletedChallengeObserver;
use App\Observers\NotificationObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        CompletedChallenge::observe(CompletedChallengeObserver::class);
        Challenge::observe(ChallengeObserver::class);
        Notification::observe(NotificationObserver::class);
    }
}
