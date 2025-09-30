<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.editar');
Route::get('ambiente/', AmbienteIndex::class)->name('ambiente.index');

Route::get('/', Dashboard::class);

