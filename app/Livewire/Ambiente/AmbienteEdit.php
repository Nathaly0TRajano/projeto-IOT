<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{

    public $nome;
    public $descricao;
    public $status;
    public $ambienteId;

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.ambiente.ambiente-edit', compact('ambientes'));
    }

     public function mount($id){

        $ambiente = Ambiente::find($id);
    
        if ($ambiente == null) {
            session()->flash('error', 'Ambiente não encontrado');
            return redirect()->route('ambiente.index');
        } else {
            
        $this->ambienteId = $ambiente->id;    
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;

        }
        
    }

    public function salvar(){

        $ambiente = Ambiente::find($this->ambienteId);

        if ($ambiente) {

            $ambiente->nome = $this->nome;
            $ambiente->descricao = $this->descricao;
            $ambiente->status = $this->status;


            $ambiente->save();
            session()->flash('success', 'Ambiente atualizado com sucesso!');
             return redirect()->route('ambiente.index');
        }
    } 
}
