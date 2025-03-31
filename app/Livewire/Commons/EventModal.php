<?php

namespace App\Livewire\Commons;

use Livewire\Component;

class EventModal extends Component
{
    public $label;
    public $id;

    public function mount($id, $label){
        $this->id = $id;
        $this->label = $label;
    }

    public function render()
    {
        return view('livewire.commons.event-modal');
    }
}
