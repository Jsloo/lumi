<?php

namespace App\Livewire\Site\Product;

use App\Livewire\Site\Product;
use App\Models\Product as ModelsProduct;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    const PAGINATION_NUMBER = 12;

    public $subcategory, $search, $sortBy;

    public function mount(SubCategory $subcategory)
    {
        $this->subcategory = $subcategory; 
    }

    public function enquire($productId)
    {
        $product = ModelsProduct::find($productId);

        $message = "Hello, I am interested in learning more about your product: {$product->name}. Could you please provide additional details? Thank you!";

        $encodedMessage = urlencode($message);
        $url = "https://wa.me/60165496195?text={$encodedMessage}";

        return redirect()->to($url);
    }

    public function filter($search)
    {
        $query = $this->subcategory->products();

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query;
    }


    public function render()
    {
        return view('livewire.site.product.lists', [
            'products' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER),
        ])->layout('site.layouts.app', ['pageTitle' => 'Product']);
    }
}
