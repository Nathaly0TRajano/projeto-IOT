<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class Index extends Component
{
     public $perPage = 10;

     protected $queryString = [
        'perPage' => ['except' => 10]
    ];

    public function render()
    {
        $registros = Registro::paginate($this->perPage);
        return view('livewire.registro.index', compact('registros'));
    }

    public function delete($id){
        $registro = Registro::find($id);

        $registro->delete();

    }
}
