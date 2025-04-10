<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;
    

    protected $rules = [
        'nome'=> 'required',
        'ingredientes' => 'required',
        'valor' => 'required|decimal 10,2',
        
    ];

    protected $messages = [
        'nome.required' => 'nome obrigatorio',
        'ingredientes.required' => 'ingredientes obrigatorio',
        'valor.required' => 'valor obrigatório',
        'valor.decimal' => 'valor decimal 8,2'
    ];
    

    public function store(){
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        $this->validate();
    }
    
    
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
