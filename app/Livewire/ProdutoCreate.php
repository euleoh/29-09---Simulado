<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $preco;
    public $qtd_estoque;
    public $qtd_minima;
    public $descricao;

    public function store(){
        Produto::create([
            'nome' => $this -> nome,
            'preco' => $this-> preco,
            'qtd_estoque'=> $this->qtd_estoque,
            'qtd_minima'=> $this-> qtd_minima,
            'descricao'=> $this-> descricao,

            
        ]);
         
        session()->flash('success', 'Cadastrado');
        return redirect()->route('produto.index');

    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
