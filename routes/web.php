<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteIndex;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit', AmbienteEdit::class)->name('ambiente.editar');
Route::get('ambiente/', AmbienteIndex::class)->name('ambiente.index');