<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Lista de Administradores</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('admins.create') }}" class="btn btn-success mb-3">Novo Administrador</a>

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
                    @foreach ($administrador)
                        <tr>
                            <td>{{ $administrador->name }}</td>
                            <td>{{ $administrador->cpf }}</td>
                            <td>{{ $administrador->email }}</td>
                            <td>
                                <a href="{{ route('admins.edit', $administrador->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $administrador->id }})">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
