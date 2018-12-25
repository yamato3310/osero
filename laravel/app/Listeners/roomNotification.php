<?php

namespace App\Listeners;

use App\Events\enteringTheRoom;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class roomNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  enteringTheRoom  $event
     * @return void
     */
    public function handle(enteringTheRoom $event)
    {
        //
    }
}
