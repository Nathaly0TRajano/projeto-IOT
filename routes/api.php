<?php

use App\Http\Controllers\RegistroController;
use App\Livewire\RegistroIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class,"store"]);



