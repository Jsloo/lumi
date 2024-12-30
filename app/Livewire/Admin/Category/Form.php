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
    public $thumbnail, $newThumbnail, $temporaryUrl;

    public bool $edit = false, $loading = false;
    protected $listeners = ['editCategory' => 'edit'];


    protected function rules(): array
    {
        $rules = [
            'name' => ['required', 'string'],
        ];
    
        if (!$this->edit) {
            $rules = array_merge($rules, [
                'newThumbnail' => ['required', 'image', 'max:2048'],
            ]);
        } else {
            $rules = array_merge($rules, [
                'newThumbnail' => ['nullable', 'image', 'max:2048'],
            ]);
        }

        return $rules;
    }

    public function edit(Category $category): void
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->thumbnail  = $this->getThumbnailUrl($category->image);
        $this->edit  = true;
    }

    public function store(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            $thumbnail = $this->newThumbnail->store('category', 'public');
            Category::create([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
                'image' => $thumbnail,
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
            if($this->newThumbnail){
                $thumbnail = $this->newThumbnail->store('category', 'public');
                
                $this->category->update([
                    'image' => $thumbnail,
                ]);
            }
            $this->reset();
            $this->dispatch('closeModal', '#'.$this->modalID);
            $this->dispatch('refreshComponent');
            $this->alert('success', 'Category Updated Succesfully!'); 

        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function getThumbnailUrl(?string $thumbnail = null): ?string
    {
        if ($thumbnail) {
            return 'url(' . secure_asset('storage/' . $thumbnail) . ')';
        }

        return $thumbnail;
    }

    public function updatedNewThumbnail(): void
    {
        $this->temporaryUrl = 'url(' . $this->newThumbnail->temporaryUrl() . ')';
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
