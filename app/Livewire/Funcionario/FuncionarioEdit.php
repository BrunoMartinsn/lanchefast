<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioEdit extends Component
{
    public $funcionario;
    public $nome, $endereco, $telefone, $cpf, $email;

    public function mount(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
        $this->nome = $funcionario->nome;
        $this->cpf = $funcionario->cpf;
        $this->email = $funcionario->email;
    }

    public function update()
    {
        $this->validate([
            'nome' => 'required|string',
            'cpf' => 'required|unique:clientes,cpf,' . $this->funcionario->id,
            'email' => 'required|email|unique:clientes,email,' . $this->funcionario->id,
        ]);

        $this->funcionario->update([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ]);

        session()->flash('success', 'funcionario atualizado!');
        return redirect()->route('funcionarios.index');
    }

    public function render()
    {
        return view('livewire.funcionario.funcionario-edit');
    }
}
