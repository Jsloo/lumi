<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
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
        $query = Contact::query();

        if ($search) {
            $query->where('name','like', "%{$search}%");
        }
        
        return $query;
    }

    public function render()
    {
        return view('livewire.admin.contact.lists',[
            'headers'  => ['No.', 'Name', 'Email', 'Subject',['align' => 'right', 'name' =>'Actions']],
            'contacts' => $this->filter($this->search)->paginate(self::PAGINATION_NUMBER)
        ])->layout('admin.layouts.index', [
            'pageTitle' => 'Contact Listing'
        ]);
    }
}
