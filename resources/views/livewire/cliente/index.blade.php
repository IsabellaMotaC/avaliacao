<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Lista de Clientes</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('cliente.create') }}" class="btn btn-success mb-3">Novo Cliente</a>

            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->CPF }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $cliente->id }})">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
