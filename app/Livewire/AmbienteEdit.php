<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status; 

    public function render()
    {
        return view('livewire.ambiente-edit');
    }

    public function mount($id){
        $ambiente = Ambiente::find($id);

        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
        
    }
}
