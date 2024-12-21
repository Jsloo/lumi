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
    
    
        return $rules;
    }

    public function edit(SubCategory $subCategory): void
    {
        $this->subCategory = $subCategory;
        $this->name = $subCategory->name;
        $this->category = $subCategory->category->id;
        $this->edit  = true;
        // dd($subCategory);

    }

    public function test(){
        dd(1);
    }

    public function store(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            SubCategory::create([
                'name' => $this->name,
                'slug' => str_replace(' ', '_', strtolower($this->name)),
                'category_id' => $this->category
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
        return view('livewire.admin.sub-category.form-modal')->layout('admin.layouts.index', [
            'pageTitle' => 'Add Sub Category'
        ]);
    }
}
