<?php

namespace App\Livewire\Produto;

use App\Livewire\Produto;
use App\Models\Produto as ModelsProduto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $nome, $ingredientes, $valor, $imagem;

    protected $rules = [
        'nome' => 'required|string|min:3',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric|min:0',
        'imagem' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('produto', 'public') : null;

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagePath,
        ]);

        session()->flash('message', 'Produto cadastrado com sucesso!');
        return redirect()->route('produto.index');
    }
    public function render()
    {
        return view('livewire.produto.create');
    }
}
