<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $preco;
    public $qtd_estoque;
    public $qtd_minima;
    public $descricao;
    public $produtoId;

    public function mount($id){
        
        $produto = Produto::find($id);

        $this->nome = $produto->nome;
        $this->preco = $produto->preco;
        $this->qtd_estoque = $produto->qtd_estoque;
        $this->qtd_minima = $produto->qtd_minima;
        $this->descricao = $produto->descricao;
    }

    public function update(){
       $produto= Produto::find($this->produtoId);

       $produto->nome = $this->nome;
       $produto->preco = $this->preco;
       $produto->qtd_estoque = $this->qtd_estoque;
       $produto->qtd_minima = $this->qtd_minima;
       $produto->descricao = $this->descricao;

       $produto->save();

       session()->flash('success', 'Atualizado');

       return redirect()->route('produto.index');
    }
    

    public function render()
    {
        return view('livewire.produto-edit');
    }
}
