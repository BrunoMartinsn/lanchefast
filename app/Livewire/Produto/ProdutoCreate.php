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
    
    

    

    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric|min:0',
        
    ];

    public function store()
    {
        $this->validate();

       
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('produtos.index');
    }
    
    
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
