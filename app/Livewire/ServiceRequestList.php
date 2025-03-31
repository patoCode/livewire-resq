<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\ServiceRequest;
use Livewire\Attributes\On;
use Livewire\Component;

class ServiceRequestList extends Component
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

    #[On('update-services')]
    public function updateTable()
    {
        $this->render();
    }

    public function render()
    {
        $services = ServiceRequest::where('description', 'ilike', '%' . $this->search . '%')
                    ->whereOr('code', 'ilike', '%' . $this->search . '%')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->perPage);

        return view('livewire.service-request-list', compact('services'));
    }
}
