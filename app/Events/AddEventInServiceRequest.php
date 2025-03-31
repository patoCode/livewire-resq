<?php

namespace App\Events;

use App\Models\ServiceRequest;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddEventInServiceRequest
{
    use Dispatchable, SerializesModels;

    public ServiceRequest $event;

    public function __construct(ServiceRequest $event){
        $this->event = $event;
    }

}
