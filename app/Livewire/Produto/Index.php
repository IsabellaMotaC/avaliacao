<?php

namespace App\Livewire\Produto;

use App\Livewire\Produto;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $produtos = Produto::all();
        return view('livewire.produto.index', compact('produtos'));

    }
}
