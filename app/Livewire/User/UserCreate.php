<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    
    protected $rules = [
        'name'=>'required|max:80',
        'email'=>'required|email',
        'password'=>'required'
    ];

    protected $messages = [
        'name.required'=>'Este campo é necessário',
        'name.max'=>'Este campo só pode ter no máximo 80 caracteres',
        'email.required'=> 'Este campo é necessário',
        'email.email'=>'Este campo precisa ser um email',
        'password.required'=> 'Este campo é necessário'
    ];
    
    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store(){

        $this->validate();

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);

        session()->flash('success', 'Cadastrado com sucesso');
        return redirect()->route('user.index');

        if($user == null){
            session()->flash('error', 'Não foi possível cadastrar');
        }
    }
}
