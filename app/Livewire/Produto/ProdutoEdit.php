<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto;
    public $nome;
    public $ingredientes; 
    public $valor;

    public function mount(Produto $produto)
    {
        $this->produto = $produto;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
       
    }

    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric|min:0',
        
    ];

    public function update()
    {
        $this->validate();


        $this->produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            
        ]);

        session()->flash('success', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.index');
    }
    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
