<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente_id;

    public function render()
    {
        return view('livewire.sensor-edit');
    }

      public function mount($id)
    {
        $sensor = Sensor::find($id);

        if ($sensor == null) {
            session()->flash('error', 'Sensor não encontrado');
            return redirect()->route('sensor.index');
        } else {

            $this->ambiente_id = $sensor->id;
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

            $sensor->ambiente_id = $this->ambiente_id;
            $sensor->codigo = $this->codigo;
            $sensor->tipo = $this->tipo;
            $sensor->descricao = $this->descricao;
             $sensor->status = $this->status;

            $sensor->save();
            session()->flash('success', 'Cadastro atualizado com sucesso!');
             return redirect()->route('sensor.edit');
        }
    }
}

