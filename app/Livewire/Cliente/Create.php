<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome, $endereco, $telefone, $CPF, $email, $senha;

    protected $rules = [
        'nome' => 'required|string|min:3',
        'endereco' => 'required|string',
        'telefone' => 'required|string|min:10',
        'CPF' => 'required|unique:cliente,cpf|size:11',
        'email' => 'required|email|unique:cliente,email',
        'senha' => 'required|min:6',
    ];

    public function save()
    {
        

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('message', 'Cliente cadastrado com sucesso!');
        return redirect()->route('cliente.index');
    }

    public function render()
    {
        return view('livewire.cliente.create');
    }
}
