<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class Show extends Component
{
    public string $modalID = 'showContactModal', $modalTitle = 'contact';
    public $name, $phone, $email, $subject, $request;

    public bool $edit = false, $loading = false;
    protected $listeners = ['showContact' => 'edit'];


    public function edit(Contact $contact): void
    {
        $this->name = $contact->name;
        $this->phone = $contact->phone;
        $this->email = $contact->email;
        $this->subject = $contact->subject;
        $this->request = $contact->request;
    }

    public function closeModalReset(){
        $this->resetErrorBag(); 
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.contact.show-modal');
    }
}
