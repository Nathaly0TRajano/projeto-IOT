<?php


use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');

Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.editar');

Route::get('ambiente/', AmbienteIndex::class)->name('ambiente.index');


Route::get('/', Dashboard::class);


Route::get('sensor/create', SensorCreate::class)->name('sensor.create');

Route::get('sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');

Route::get('sensor/', SensorIndex::class)->name('sensor.index');
