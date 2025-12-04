<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status; 

    protected $rule = [
        'nome'=> 'required|max:80',
        'descricao'=>'required|max:100',
    ];

    protected $messages = [
        'nome.required'=> 'O campo ambiente é obrigatório',
        'nome.max'=>'O campo só pode ter 80 caracteres',
        'descricao.required'=>'O campo ambiente é obrigatório',
        'descricao.max'=>'O campo só pode ter 100 caracteres',
    ];

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }

    public function store(){

       
        Ambiente::create([
            'nome'=> $this->nome,
            'descricao'=> $this->descricao,
            'status'=>$this->status
        ]);

        return redirect()->route('ambiente.index');
    }
}
