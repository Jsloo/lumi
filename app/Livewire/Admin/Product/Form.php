<?php

namespace App\Livewire\Admin\Product;


use App\Models\Product;
use App\Models\SubCategory;
use Exception;
use GuzzleHttp\Handler\Proxy;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    use LivewireAlert;

    #[Validate('image|max:1024')] // 1MB Max
    public $photo;
 
    public function save()
    {
        $this->photo->store(path: 'photos');
    }

    public string $modalID = 'productModal', $modalTitle = 'Product';
    public $thumbnail, $newThumbnail, $name, $price, $stock, $description, $temporaryUrl, $product, $subCategory, $subCategorys;
    public bool $edit = false, $loading = false;
    protected $listeners = ['editProduct' => 'edit'];

    public function mount()
    {
        $this->subCategorys = SubCategory::all();
    }

    

    protected function rules(): array
    {
        $rules = [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'stock' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'subCategory' => ['required']
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

    public function edit(Product $product): void
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price  = $product->price;
        $this->stock = $product->stock;
        $this->description  = $product->description;
        $this->subCategory  = $product->subCategory->id;
        $this->thumbnail  = $this->getThumbnailUrl($product->image);
        $this->edit  = true;
    }

    public function test(){
        dd(1);
    }

    public function store(): void
    {
        dd($this->newThumbnail);
        $this->validate();
        try {
            $this->loading = true;
            $thumbnail = $this->newThumbnail->store('product', 'public');
            Product::create([
                'name' => $this->name,
                'price' => $this->price,
                'stock' => $this->stock,
                'description' => $this->description,
                'image' => $thumbnail,
                'sub_category_id' => $this->subCategory
            ]);

            $this->reset();
            $this->emit('closeModal', '#'.$this->modalID);
            $this->emit('refreshComponent');
            $this->alert('success', 'Reward Created Succesfully!');
        } catch (Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function update(): void
    {
        $this->validate();
        try {
            $this->loading = true;
            $this->product->update([
                'name' => $this->name,
                'price' => $this->price,
                'stock' => $this->stock,
                'description' => $this->description,
                'sub_category_id' => $this->subCategory
            ]);

            if($this->newThumbnail){
                $thumbnail = $this->newThumbnail->store('reward_image', 'public');
                
                $this->product->update([
                    'image' => $thumbnail,
                ]);
            }
            
            $this->reset();
            $this->emit('closeModal', '#'.$this->modalID);
            $this->emit('refreshComponent');
            $this->alert('success', 'Reward Updated Succesfully!'); 

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
        return view('livewire.admin.product.form-modal')->layout('admin.layouts.index', [
            'pageTitle' => 'Add Product'
        ]);
    }
}
