<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    public $temperatura;
    public $luminosidade;
    public $umidade;
    public $ultimoRegistro;

    public $labelsTemperatura = [];
    public $dadosTemperatura = [];

    public $labelsSensores = [];
    public $dadosSensores = [];

    public function mount(){
        $this->carregarDados();
    }

    public function carregarDados(){

    }

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login');
        
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
