<?php

namespace App\Livewire\Site\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    const PAGINATION_NUMBER = 12;

    public $category, $search, $sortBy;

    public function mount(Category $category){
        $this->category = $category;
    }

    public function filter($search)
    {
        $query = $this->category->subCategories();

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query;
    }


    public function render()
    {
        return view('livewire.site.sub-category.lists', [
            'subCategories' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER),
        ])->layout('site.layouts.app', ['pageTitle' => 'Product']);
    }
}
