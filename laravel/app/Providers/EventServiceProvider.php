<?php

namespace crudapp\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'crudapp\Events\Event' => [
            'crudapp\Listeners\EventListener',
        ],
        'crudapp\Events\StudentAdded' =>[
            'crudapp\Listeners\StudentAddedListener',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
