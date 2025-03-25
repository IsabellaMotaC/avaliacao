<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div>
            <label>Nome:</label>
            <input type="text" wire:model="nome">
            @error('nome') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Endereço:</label>
            <input type="text" wire:model="endereco">
            @error('endereco') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Telefone:</label>
            <input type="text" wire:model="telefone">
            @error('telefone') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>CPF:</label>
            <input type="text" wire:model="CPF">
            @error('CPF') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Senha:</label>
            <input type="senha" wire:model="senha">
            @error('senha') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</div>
