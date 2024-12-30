<?php

namespace App\Livewire\Site;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.site.about')->layout('site.layouts.app', ['pageTitle' => 'About Us']);
    }
}
