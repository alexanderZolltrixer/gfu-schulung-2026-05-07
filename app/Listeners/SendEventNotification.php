<?php

namespace App\Listeners;

use App\Events\EventCreated;
use Illuminate\Support\Facades\Log;

class SendEventNotification
{
    public function handle(EventCreated $eventCreated): void
    {
        // Logik für Benachrichtigungen
        Log::info(__('Benachrichtigung: für ":event" gesendet!', ['event' => $eventCreated->event]));
    }
}
