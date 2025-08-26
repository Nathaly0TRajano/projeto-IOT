<?php

use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('sensor/create', SensorCreate::class)->name('sensor.create');

Route::get('sensor/index/edit', SensorIndex::class)->name('sensor.edit');

Route::get('sensor/', SensorIndex::class)->name('sensor.index');


