<?php

namespace App\Livewire\Admin\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;

    public string $modalID = 'subCategoryModal', $modalTitle = 'subCategory';
    public $name, $subCategory, $categorys, $category;
    public $thumbnail, $newThumbnail, $temporaryUrl;

    public bool $edit = false, $loading = false;
    protected $listeners = ['editSubCategory' => 'edit'];

    public function mount()
    {
        $this->categorys = Category::all();
    }

    protected function rules(): array
    {
        $rules = [
            'name' => ['required', 'string'],
            'category' => ['required'],
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

    public function edit(SubCategory $subCategory): void
    {
        $this->subCategory = $subCategory;
        $this->name = $subCategory->name;
        $this->category = $subCategory->category->id;
        $this->thumbnail  = $this->getThumbnailUrl($subCategory->image);
        $this->edit  = true;
    }

    public function store(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            $thumbnail = $this->newThumbnail->store('sub-category', 'public');
            SubCategory::create([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
                'category_id' => $this->category,
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
            $this->subCategory->update([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
                'category_id' => $this->category
            ]);

            if($this->newThumbnail){
                $thumbnail = $this->newThumbnail->store('sub-category', 'public');
                
                $this->subCategory->update([
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
        return view('livewire.admin.sub-category.form-modal')->layout('admin.layouts.index', [
            'pageTitle' => 'Add Sub Category'
        ]);
    }
}
