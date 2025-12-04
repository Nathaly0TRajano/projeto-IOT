<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email'=>'required|email|exists:users,email',
        'password'=>'required'
    ];

    protected $messages = [
        'email.required'=> 'Este campo é necessário',
        'email.email'=>'Este campo precisa ser um email',
        'email.exists'=>'Este email não existe',
        'passoword.required'=> 'Este campo é necessário'
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){

        $this->validate();
    
    if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
        session()->regenerate();
        return redirect('home');
    }

    session()->flash('error','Email ou senha incorretos');

    }
}
