<?php

use App\Livewire\Cliente\Index;
use App\Livewire\Cliente\Login;
use App\Models\Cliente;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cliente/index', Index::class);
