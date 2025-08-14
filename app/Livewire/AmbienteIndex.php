<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.ambiente-index', compact('ambientes'));
    }
}
