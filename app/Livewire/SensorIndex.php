<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorIndex extends Component
{

    public $sensor;
    use WithPagination;


    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];

    protected $rules = [
        'ambiente_id' => 'required',
        'codigo' => 'required|integer|unique:sensors,codigo',
        'tipo' => 'required|max:50|min:5',
        'descricao' => 'required|max:255|min:5'
    ];

    protected $messages = [
        'ambiente_id.required' => 'O campo nome é obrigatório',
        'codigo.required' => 'O código é obrigatório',
        'codigo.unique' => 'Este código já está cadastrado',
        'tipo.required' => 'O campo tipo é obrigatório',
        'tipo.min' => 'O número minímo de caracteres é de 5',
        'tipo.max' => 'O limite maxímo de caracteres é de 50',
        'descricao.max' => 'O máximo de caracteres é 255',
        'descricao.min' => 'O mínimo de caracteres é 5',
    ];

    public function render()
    {
        $sensors = Sensor::paginate(15);
        return view('livewire.sensor-index', compact('sensors'));
    }

    public function delete($id)
    {

        $sensor = Sensor::find($id);

        $sensor->delete();
        session()->flash('message', 'Sensor deletado com sucesso!');
    }
}
