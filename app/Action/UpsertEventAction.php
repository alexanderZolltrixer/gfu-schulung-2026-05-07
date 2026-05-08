<?php

namespace App\Action;

use App\Data\EventData;
use App\Events\EventCreated;
use App\Exceptions\UnableToCreateEventException;
use App\Exceptions\UnableToUpsertEventException;
use App\Models\Event;

class UpsertEventAction
{
    /**
     * @param EventData $data
     * @param Event|null $event
     * @return Event
     * @throws UnableToUpsertEventException
     */
    public function execute(EventData $data, Event|null $event = null): Event
    {
        if (null === $event) {
            $event = new Event($data->toArray());
            event(new EventCreated($event));
        } else {
            $event->update($data->toArray());
        }

        if( ! $event->save()){
            throw new UnableToUpsertEventException();
        }

        if($data->hasTags()){
            $event->tags()->sync($data->tags);
        }

        return $event;
    }
}
