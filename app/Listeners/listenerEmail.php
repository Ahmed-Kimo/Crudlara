<?php

namespace App\Listeners;

use App\Events\eventEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\jobEmail;

class listenerEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(eventEmail $event): void
    {
        dispatch(new jobEmail($event->email , $event->data)) ;
    }
}
