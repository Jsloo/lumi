<?php

namespace App\Livewire\Site;

use App\Models\Contact as ModelsContact;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Contact extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $request;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'subject' => 'required|string|max:255',
        'request' => 'required|string|max:1000',
    ];

    public function submit()
    {
        $this->validate();

        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'request' => $this->request,
        ]);
    
        // Optionally reset the form
        $this->reset();
        $this->alert('success', 'Request Submit Succesfull!');
    }

    public function render()
    {
        return view('livewire.site.contact')->layout('site.layouts.app', ['pageTitle' => 'Contact Us']);
    }
}
