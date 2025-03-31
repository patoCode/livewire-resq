<?php

namespace App\Livewire;

use App\Events\AddEventInServiceRequest;
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

        $code = $this->createCodeRequest($validated['category']);

        $service = ServiceRequest::create([
            'description' => $validated['description'],
            'category_id' => $validated['category'],
            'code' => $code,
            'user_id' => auth()->id(),
        ]);
        session()->flash('success', 'SEG: '.$code.'.Su solicitud ha sido creada exitosamente. ');
        $this->reset('files','description','category');

        event(new AddEventInServiceRequest($service));

        $this->dispatch('update-services');
    }

    public function createCodeRequest($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $counter = ServiceRequest::where('category_id', $categoryId)->count();
        return $category->code.'-'.(($counter ?? 0) + 1).'-'.date('dmYHis');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.service-form', compact('categories'));
    }
}
