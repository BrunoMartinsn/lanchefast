<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Editar Cliente</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control" wire:model.defer="endereco">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" wire:model.defer="telefone">
                </div>
                <div class="mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" wire:model.defer="cpf">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" wire:model.defer="email">
                </div>
                <button class="btn btn-primary">Atualizar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>

