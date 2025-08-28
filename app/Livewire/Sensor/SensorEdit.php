<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente_id;
    public $sensorId;
    
    protected $rules = [
        'ambiente_id'=> 'required',
        'codigo'=> 'required|unique:sensors,codigo->ignore("$sensor->id")',
        'tipo'=> 'required|max:50|min:3',
        'descricao'=> 'required|max:255|min:5',
        'status'=> 'required'
    ];

    protected $messages = [
        'ambiente_id.required'=> 'O campo ambiente é obrigatório',
        'codigo.required' => 'O código é obrigatório',
        'codigo.unique' => 'Este código já está cadastrado',
        'tipo.required' => 'O campo tipo é obrigatório',
        'tipo.min' => 'O número minímo de caracteres é de 3',
        'tipo.max' => 'O limite maxímo de caracteres é de 50',
        'descricao.max' => 'O máximo de caracteres é 255',
        'descricao.min' => 'O mínimo de caracteres é 5',
        'sensor.required'=> 'É necessário escolher o status do sensor'
    ];
    
    public function render()
    {
         $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-edit', compact('ambientes'));
    }

    public function mount($id)
    {
        $sensor = Sensor::find($id);

        if ($sensor == null) {
            session()->flash('error', 'Sensor não encontrado');
            return redirect()->route('sensor.index');
        } else {

            $this->sensorId = $sensor->id;
            $this->ambiente_id = $sensor->ambiente_id;
            $this->codigo = $sensor->codigo;
            $this->tipo = $sensor->tipo;
            $this->descricao = $sensor->descricao;
            $this->status = $sensor->status;
        }
    }
    
    public function salvar()
    {

        $sensor = Sensor::find($this->sensorId);

        if ($sensor) {

            $this->validate();
            $sensor->ambiente_id = $this->ambiente_id;
            $sensor->codigo = $this->codigo;
            $sensor->tipo = $this->tipo;
            $sensor->descricao = $this->descricao;
            $sensor->status = $this->status;


            $sensor->save();
            session()->flash('success', 'Sensor atualizado com sucesso!');
             return redirect()->route('sensor.index');
        }
    }

}
