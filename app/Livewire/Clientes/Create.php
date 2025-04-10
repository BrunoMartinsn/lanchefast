<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome'=> 'required',
        'endereco' => 'required',
        'telefone' => 'required',
        'cpf' => 'required|min:11|unique',
        'email' => 'required|email|unique',
        'senha' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'nome obrigatorio',
        'endereco.required' => 'endereco obrigatorio',
        'telefone.required' => 'telefone obrigatório',
        'cpf.required' => 'cpf obrigatório',
        'cpf.unique' => 'cpf unico',
        'cpf.min' => 'cpf deve conter no minimo 11 caracteres',
        'email.require' => 'email obrigatorio',
        'email.unique' => 'email unico',
        'email.email' => 'formato de email invalido',
        'senha.required' => 'senha obrigatório',
        'senha.min' => 'senha deve conter no minimo 6 caracteres'
    ];
    

    public function store(){
        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        $this->validate();
    }
    public function render()
    {
        return view('livewire.clientes.create');
    }
}
