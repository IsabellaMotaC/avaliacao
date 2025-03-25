<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Cadastro de Produto</h4>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <form wire:submit.prevent="save" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" class="form-control" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ingredientes:</label>
                    <textarea class="form-control" wire:model="ingredients"></textarea>
                    @error('ingredients') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço:</label>
                    <input type="number" step="0.01" class="form-control" wire:model="price">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagem:</label>
                    <input type="file" class="form-control" wire:model="image">
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
