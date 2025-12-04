<?php


use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Auth\Login;
use App\Livewire\Registro\Index;
use App\Livewire\User\UserCreate;
use App\Livewire\User\UserIndex;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create')->middleware('auth');

Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.editar')->middleware('auth');

Route::get('ambiente/', AmbienteIndex::class)->name('ambiente.index')->middleware('auth');

Route::get('/', Login::class)->name('login');
Route::get('home', Dashboard::class)->name('dashboard')->middleware('auth');


Route::get('sensor/create', SensorCreate::class)->name('sensor.create')->middleware('auth');

Route::get('sensor/edit/{id}', SensorEdit::class)->name('sensor.edit')->middleware('auth');

Route::get('sensor/', SensorIndex::class)->name('sensor.index')->middleware('auth');

Route::get('registro/', Index::class)->middleware('auth');

Route::get('user/create', UserCreate::class)->name('user.create')->middleware('auth');

Route::get('user/', UserIndex::class)->name('user.index')->middleware('auth');
