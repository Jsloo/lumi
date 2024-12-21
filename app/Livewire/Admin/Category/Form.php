<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;

    public string $modalID = 'categoryModal', $modalTitle = 'Category';
    public $name, $category;
    public bool $edit = false, $loading = false;
    protected $listeners = ['editCategory' => 'edit'];


    protected function rules(): array
    {
        $rules = [
            'name' => ['required', 'string'],
        ];
    
    
        return $rules;
    }

    public function edit(Category $category): void
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->edit  = true;
    }

    public function test(){
        dd(1);
    }

    public function store(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            Category::create([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
            ]);

            $this->reset();
            $this->dispatch('closeModal', '#'.$this->modalID);
            $this->dispatch('refreshComponent');
            $this->alert('success', 'Category Created Succesfully!');
        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function update(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            $this->category->update([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
            ]);

            $this->reset();
            $this->dispatch('closeModal', '#'.$this->modalID);
            $this->dispatch('refreshComponent');
            $this->alert('success', 'Category Updated Succesfully!'); 

        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }


    public function closeModalReset(){
        $this->resetErrorBag(); 
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.category.form-modal')->layout('admin.layouts.index', [
            'pageTitle' => 'Add Category'
        ]);
    }
}
