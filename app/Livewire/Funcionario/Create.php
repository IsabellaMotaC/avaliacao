<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome, $cpf, $email, $senha;

    protected $rules = [
        'nome' => 'required|string|min:3',
        'cpf' => 'required|string|size:11|unique:funcionari9o,cpf',
        'email' => 'required|email|unique:funcionario,email',
        'senha' => 'required|min:6',
    ];

    public function save()
    {
        $this->validate();

        Funcionario::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('message', 'Funcionário cadastrado com sucesso!');
        return redirect()->route('funcionario.index');
    }
    public function render()
    {
        return view('livewire.funcionario.create');
    }
}
