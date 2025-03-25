<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Lista de Produtos</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Novo Produto</a>

            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->ingredients }}</td>
                            <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $product->id }})">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

