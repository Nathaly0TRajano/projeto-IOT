<?php

use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorEdit;
use App\Livewire\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('sensor/create', SensorCreate::class)->name('sensor.create');

Route::get('sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');

Route::get('sensor/', SensorIndex::class)->name('sensor.index');


