<?php

namespace App\Livewire\Admin\SubCategory;

use App\Models\SubCategory;
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
        $query = SubCategory::query();

        if ($search) {
            $query->where('name','like', "%{$search}%");
        }
        
        return $query;
    }

    public function render()
    {
        return view('livewire.admin.sub-category.lists',[
            'headers'  => ['No.', 'Name',['align' => 'right', 'name' =>'Actions']],
            'subCategory' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER)
        ])->layout('admin.layouts.index', [
            'pageTitle' => 'Sub Category Listing'
        ]);
    }
}
