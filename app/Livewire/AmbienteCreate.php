<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function render()
    {
        return view('livewire.ambiente-create');
    }

    public function store(){
        Ambiente::create([
            'nome'=> $this->nome,
            'descricao'=> $this->descricao,
            'status'=>$this->status
        ]);

        return redirect()->route('ambiente.create');
    }
}
