<?php

namespace App\Livewire\Site\Product;

use App\Models\Product;
use Livewire\Component;

class Details extends Component
{
    public $product;
    
    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.site.product.details')->layout('site.layouts.app', ['pageTitle' => 'Product']);
    }
}
