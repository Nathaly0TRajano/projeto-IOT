<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente_id;

     protected $rules = [
        'ambiente_id'=> 'required',
        'codigo'=> 'required|unique:sensors,codigo',
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
        'descricao.required' =>'O campo descrição é obrigatório',
        'descricao.max' => 'O máximo de caracteres é 255',
        'descricao.min' => 'O mínimo de caracteres é 5',
        'status'=> 'Escolha como quer o status do sensor'
    ];

    public function render()
    {
         $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }

    public function store(){

        $this->validate();


        $sensor = Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo'=> $this->codigo,
            'tipo'=> $this->tipo,
            'descricao'=> $this->descricao,
            'status'=> $this->status
        ]);

         session()->flash('success', 'Sensor criado com sucesso!');
           return redirect()->route('sensor.index');
    }
}
