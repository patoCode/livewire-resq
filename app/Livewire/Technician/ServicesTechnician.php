<?php

namespace App\Livewire\Technician;

use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ServicesTechnician extends Component
{
    public $search;
    public $perPage = 10;
    public $sort = 'created_at';
    public $direction = 'DESC';

    public function mount()
    {
        $this->search = "";
        $this->perPage = 10;
    }


    public function render()
    {
        $services = ServiceRequest::where('description', 'ilike', '%' . $this->search . '%')
            ->whereOr('code', 'ilike', '%' . $this->search . '%')
            ->where('user_id', Auth::user()->id)
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->perPage);

        return view('livewire.technician.services-technician', compact('services'));
    }
}
