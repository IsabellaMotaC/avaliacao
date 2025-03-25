<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Cliente\Edit;
use App\Livewire\Cliente\Index;
use App\Livewire\Cliente\Login;
use App\Models\Cliente;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', Index::class)->name('cliente.index');  // Listar clientes
Route::get('/clientes/cadastro', Create::class)->name('cliente.create');  // Criar cliente
Route::get('/clientes/editar/{cliente}', Edit::class)->name('cliente.edit');  // Editar cliente