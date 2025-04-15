<?php

namespace App\Livewire\Administrador;

use App\Models\Administrador;
use Livewire\Component;
use Livewire\WithPagination;

class AdministradorIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
        $administrador = Administrador::where('nome', 'like', "%{$this->search}%")
        ->orWhere('email', 'like', "%{$this->search}%")
        ->orWhere('cpf', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.administrador.administrador-index', compact('administrador'));
    }
    public function delete($id)
    {
        Administrador::findOrFail($id)->delete();
        session()->flash('message', 'administrador deletado com sucesso');
    }
}
