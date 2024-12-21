<?php

namespace App\Livewire\Admin\Post;

use Livewire\Component;

class Lists extends Component
{
    public $test;
    public function t123(){
        dd(112);
    }
    public function render()
    {
        return view('livewire.admin.post.lists')->layout('livewire.admin.test', [
                'pageTitle' => 'Product Listing'
            ]);
    }
}
