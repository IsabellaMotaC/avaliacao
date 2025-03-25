<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.cliente.index', compact('clientes'));
    }
}
