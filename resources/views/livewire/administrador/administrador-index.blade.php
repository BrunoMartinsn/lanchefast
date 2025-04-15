<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>administrador</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('administrador.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo funcionario
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control"
                        placeholder="Buscar administrador...">
                </div>
                <div class="col-md-3">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse($administrador as $administrador)
                            <tr>
                                <td>{{ $administrador->nome }}</td>
                                <td>{{ $administrador->cpf }}</td>
                                <td>{{ $administrador->email }}</td>
                                
                                <td>
                                    <a href="{{ route('Administrador.show', $administrador->id) }}"
                                        class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('Administrador.edit', $administrador->id) }}"
                                        class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $administrador->id }})"
                                        class="btn btn-sm btn-danger" onclick="return
                                        confirm('Tem ceteza?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                               <td colspan="5" class="text-center">Nenhum administrador encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $administrador->links() }}
            </div>
        </div>
    </div>
</div>

