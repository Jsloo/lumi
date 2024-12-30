<?php

namespace App\Livewire\Site\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    const PAGINATION_NUMBER = 12;

    public $category, $search, $sortBy;

    public function filter($search)
    {
        $query = Category::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query;
    }


    public function render()
    {
        return view('livewire.site.category.lists', [
            'categories' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER),
        ])->layout('site.layouts.app', ['pageTitle' => 'Product']);
    }
}
