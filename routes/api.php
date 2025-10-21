<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\RegistroIndex;
use App\Livewire\Sensor\SensorCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class,"store"]);

Route::put('ambiente/edit/',[AmbienteController::class,"update"]);

Route::get('ambiente/{id}/find',[AmbienteController::class,"findLED"]);

Route::post('ambiente/create/', AmbienteCreate::class, 'store');

Route::post('sensor/create/',[SensorController::class,"store"]);


//no sensor/ambiente controller, criar uma função para buscar o led.
// criar uma rota para buscar um sensor/ambiente específico. 
//com a resposta dessa rota, o esp precisa comparar o valor, caso o valor do status seja 1, ligar o led, e caso seja 0, desligar o led
// criar uma condicional (if) no esp, verificando se a resposta(response) é 1 ou 0. 
// ao criar a função de consulta, retornar apenas 0 ou 1, que é o valor atual do status


