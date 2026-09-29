<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function delete($id){
        $produto = Produto::find($id);

        if($produto != null){
            $produto ->delete;

            session()->flash('success', 'Deletado');
        }
        return redirect()->route('produto.index');
    }



    public function render()
    {

        $produtos = Produto::all();

        return view('livewire.produto-index', compact('produtos'));
    }
}
