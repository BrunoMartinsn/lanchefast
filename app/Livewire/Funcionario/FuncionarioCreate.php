<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class FuncionarioCreate extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome'=> 'required',
        'cpf' => 'required|min:11|unique',
        'email' => 'required|email|unique',
        'senha' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'nome obrigatorio',
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
        Funcionario::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        return redirect()->route('funcionarios.index');
        $this->validate();
    }
    public function render()
    {
        return view('livewire.funcionario.funcionario-create');
    }
}
