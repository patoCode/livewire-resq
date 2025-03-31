<?php

namespace App\Livewire;

use App\Models\ServiceRequest;
use Livewire\Component;

class InfoModal extends Component
{

    public $service;

    public function mount($id)
    {
        $this->service = ServiceRequest::with([
                'user',
                'category',
                'events' => function($query){
                    $query->orderBy('nro');
                },
                'events.user'
            ])->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.info-modal', ['service' => $this->service]);
    }
}
