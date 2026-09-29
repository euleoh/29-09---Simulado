<div class="container mt-4">
    <div class="card-header">
        <h1>Cadastro de Produto</h1>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form wire:submit='update'>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model='nome'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" wire:model='preco'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quant. Estoque</label>
                    <input type="text" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quant. Miníma</label>
                    <input type="text" class="form-control" id="qtd_minima" wire:model='qtd_minima'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" wire:model='descricao'>
                </div>
                <button type="submit" class="btn btn-primary">Avançar</button>
            </form>
        </div>
    </div>
</div>