<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{

    public $cliente;

    protected $rules = [
        'cliente.nome' => 'required|string|min:3',
        'cliente.endereco' => 'required|string',
        'cliente.telefone' => 'required|string|min:10',
        'cliente.email' => 'required|email|unique:cliente,email,{id}',
    ];

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function update()
    {
        $this->validate();
        $this->cliente->save();

        session()->flash('message', 'Cliente atualizado com sucesso!');
        return redirect()->route('cliente.index');
    }

    public function render()
    {
        return view('livewire.cliente.edit');
    }
}
