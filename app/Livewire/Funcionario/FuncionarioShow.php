<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioShow extends Component
{
    public Funcionario $funcionario;
    public function mount(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }
    public function render()
    {
        return view('livewire.funcionario.funcionario-show');
    }
}
