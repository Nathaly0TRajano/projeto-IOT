<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.ambiente.ambiente-index', compact('ambientes'));
    }

    public function delete($id)
    {

        $ambiente = Ambiente::find($id);

        $ambiente->delete();
        session()->flash('sucess', 'Ambiente deletado com sucesso!');
    }

    public function statusUpdate($id)
    {
        $dados = Ambiente::find($id);

        if ($dados->status == 1) {
            $dados->status = 0;
        } else {
            $dados->status = 1;
        }


        $dados->save();
    }
}
