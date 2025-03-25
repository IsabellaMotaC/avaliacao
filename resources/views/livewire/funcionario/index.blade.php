<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Lista de Funcionários</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('funcionario.create') }}" class="btn btn-success mb-3">Novo Funcionário</a>

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
                    @foreach ($funcionario as $funcionario)
                        <tr>
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $funcionario->cpf }}</td>
                            <td>{{ $funcionario->email }}</td>
                            <td>
                                <a href="{{ route('employees.edit', $funcionario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $funcionario->id }})">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

