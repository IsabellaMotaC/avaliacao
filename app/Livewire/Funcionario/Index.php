<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class Index extends Component
{

    public function delete($id)
    {
        Funcionario::find($id)->delete();
    }

    public function render()
    {
        $funcionario = Funcionario::all();
        return view('livewire.funcionario.index', compact('funcionario'));
    }
    
}
