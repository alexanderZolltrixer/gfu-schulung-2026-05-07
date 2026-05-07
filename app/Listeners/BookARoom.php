<?php

namespace App\Listeners;

use App\Events\EventCreated;
use Illuminate\Support\Facades\Log;

class BookARoom
{
    public function handle(EventCreated $eventCreated): void
    {
        // Logik für Raumbuchung
        Log::info(__('Raum für ":event" gebucht!', ['event' => $eventCreated->event]));
    }
}
