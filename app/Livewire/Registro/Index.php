<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class Index extends Component
{
    public $sensor_id;
    public $valor;
    public $unidade;
    public $data_hora;

    public function render()
    {
        $registros = Registro::all();
        return view('livewire.registro.index', compact('registros'));
    }

    public function delete($id){
        $registro = Registro::find($id);

        $registro->delete();

    }
}
