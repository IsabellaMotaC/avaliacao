<?php

namespace App\Livewire\Administrador;

use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome, $cpf, $email, $password;

    protected $rules = [
        'nome' => 'required|string|min:3',
        'cpf' => 'required|string|size:11|unique:administrador,cpf',
        'email' => 'required|email|unique:administrador,email',
        'password' => 'required|min:6',
    ];

    public function save()
    {
        $this->validate();

        Administrador::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Administrador cadastrado com sucesso!');
        return redirect()->route('administrador.index');
    }
    public function render()
    {
        return view('livewire.administrador.create');
    }
}
