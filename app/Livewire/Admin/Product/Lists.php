<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    const PAGINATION_NUMBER = 10;

    public $search;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function filter($search)
    {
        $query = Product::query();

        if ($search) {
            $query->where('name','like', "%{$search}%");
        }
        
        return $query;
    }

    public function test(){
        dd(1);
    }

    public function render()
    {
        return view('livewire.admin.product.lists',[
            'headers'  => ['No.', 'Name', 'Price', 'Stock',['align' => 'right', 'name' =>'Actions']],
            'products' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER)
        ])->layout('admin.layouts.index', [
            'pageTitle' => 'Product Listing'
        ]);
    }
}
