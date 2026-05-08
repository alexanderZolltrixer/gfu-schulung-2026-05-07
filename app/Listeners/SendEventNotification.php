<?php

namespace App\Listeners;

use App\Events\EventCreated;
use Illuminate\Support\Facades\Log;

class SendEventNotification
{
    public function handle(EventCreated $eventCreated):void
    {
        Log::info(__('Benachrichtigung: für ":event" gesendet! ' , [' event' => $eventCreated->event]));
    }
}
