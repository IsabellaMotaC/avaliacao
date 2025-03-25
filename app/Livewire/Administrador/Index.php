<?php

namespace App\Livewire\Administrador;

use App\Models\Administrador;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        Administrador::find($id)->delete();
    }

    public function render()
    {
        $administrador = Administrador::all();
        return view('livewire.administrador.index', compact('administrador'));
    }
}
