<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ServiceRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceForm extends Component
{
    use WithFileUploads;
    #[Validate('required')]
    public $category = "";
    #[Validate('required')]
    public $description = "";
    public $files = [];

    public function submit()
    {
        $validated = $this->validate();

        foreach ($this->files as $file) {
            $file->store('files');
        }

        $code = ServiceRequest::create([
            'description' => $validated['description'],
            'category_id' => $validated['category'],
            'user_id' => auth()->id(),
        ]);
        session()->flash('success', 'SEG: '.$code->id.'.Su solicitud ha sido creada exitosamente. ');
        $this->reset('files','description','category');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.service-form', compact('categories'));
    }
}
