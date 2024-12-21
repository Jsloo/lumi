<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.site.product')->layout('site.layouts.app',['pageTitle' => 'Product']);
    }
}
