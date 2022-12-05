<?php

namespace App\Providers;

use App\Events\FeedEntryCreated;
use App\Listeners\ListenerFeedEntryCreated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        FeedEntryCreated::class => [
            ListenerFeedEntryCreated::class,
        ],
    ];
}
