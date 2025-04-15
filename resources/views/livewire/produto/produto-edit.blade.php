<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header  btext-white" style="background-color: rgb(255, 255, 255)">
            <h4 class="mb-0">Editar produto</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">ingredientes</label>
                    <input type="text" class="form-control" wire:model.defer="ingredientes">
                </div>
                <div class="mb-3">
                    <label class="form-label">valor</label>
                    <input type="text" class="form-control" wire:model.defer="valor">
                </div>
                
                <button class="btn btn-primary">Atualizar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>

