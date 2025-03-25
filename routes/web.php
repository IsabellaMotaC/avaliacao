<?php

use App\Livewire\Cliente\Create as ClienteCreate;
use App\Livewire\Cliente\Edit as ClienteEdit;
use App\Livewire\Cliente\Index as ClienteIndex;
use App\Livewire\Cliente\Login;
use App\Livewire\Produto\Create as ProdutoCreate;
use App\Livewire\Produto\Edit as ProdutoEdit;
use App\Livewire\Produto\Index as ProdutoIndex;
use App\Models\Cliente;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', ClienteIndex::class)->name('cliente.index');  // Listar clientes
Route::get('/clientes/cadastro', ClienteCreate::class)->name('cliente.create');  // Criar cliente
Route::get('/clientes/editar/{cliente}', ClienteEdit::class)->name('cliente.edit');  // Editar cliente





Route::get('/produtos', ProdutoIndex::class)->name('produto.index');
Route::get('/produtos/cadastro', ProdutoCreate::class)->name('produto.create');
Route::get('/produtos/editar/{produto}', ProdutoEdit::class)->name('produto.edit');