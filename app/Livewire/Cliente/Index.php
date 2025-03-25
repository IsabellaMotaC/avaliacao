<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Index extends Component
{

    public $name, $address, $phone, $cpf, $email, $password;

    protected $rules = [
        'nome' => 'required|string|min:3',
        'endereco' => 'required|string',
        'telefone' => 'required|string|min:10',
        'CPF' => 'required',
        'email' => 'required|email',
        'senha' => 'required|min:6',
    ];

    public function save()
    {
        $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('message', 'Cliente cadastrado com sucesso!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cliente.index');
    }

    
}
