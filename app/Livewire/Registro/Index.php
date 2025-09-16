<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

     protected $queryString = [
        'search' => ['except' => '']
    ];

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
