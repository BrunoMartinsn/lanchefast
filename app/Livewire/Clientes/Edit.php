<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $cliente;
    public $nome, $endereco, $telefone, $cpf, $email;

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
    }

    public function update()
    {
        $this->validate([
            'nome' => 'required|string',
            'endereco' => 'required',
            'telefone' => 'required',
            'cpf' => 'required|unique:clientes,cpf,' . $this->cliente->id,
            'email' => 'required|email|unique:clientes,email,' . $this->cliente->id,
        ]);

        $this->cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Cliente atualizado!');
        return redirect()->route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
