<?php

namespace App\Livewire\Admin\Session;

use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    public string $email = '', $password = '';

    public function rules(): array
    {
        return [
            'email'    => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ];
    }


    public function login()
    {
        $this->validate();
        try {
            $credentials = ['email' => $this->email, 'password' => $this->password];

            if (Auth::attempt($credentials,true)) {
                session()->regenerate();
                return redirect()->route('admin.products.lists')->with('success', 'Welcome Back!');
                   
            } 
        } catch (Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
        
        throw ValidationException::withMessages([
            'username' => 'Your provided username or password is invalid'
        ]);

    }
    public function test(){
        dd(1);

    }

    public function render()
    {
        return view('livewire.admin.session.login')->layout('livewire.admin.session.app', [
            'pageTitle' => 'Administrator Login'
        ]);
    }
}
