<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('registro/', Index::class);


