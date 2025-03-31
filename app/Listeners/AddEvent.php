<?php

namespace App\Listeners;

use App\Events\AddEventInServiceRequest;
use Illuminate\Support\Facades\Log;

class AddEvent
{
    public function __construct()
    {
        //
    }

    public function handle(AddEventInServiceRequest $event): void
    {
        Log::info("Evento creado ".$event->event->code);
    }
}
