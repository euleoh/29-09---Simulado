<div class="container">
    <h2 class="mt-5">Listagem</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quant. Estoque</th>
                <th>Quant. Mínima</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)

            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->preco}}</td>
                <td>{{$p->qtd_estoque}}</td>
                <td>{{$p->qtd_minima}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <button class="btn btn-sm primary"> {{}}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
