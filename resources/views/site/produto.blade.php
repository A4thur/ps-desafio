@extends('layouts.site.site')

@section('titulo')
    Mercardinho Bergamini
@endsection
@section('conteudo')
    @include('components.alerts')
    <div class="pagina-produto-parent">
        <div class="janela_produto">
            <div class="foto_produto">
                <img class="foto_produto" src="/storage/{{ $produto->imagem }}"" alt="" />
            </div>
            <div class="info_produto">
                <h1 class="nome_produto">{{ $produto['nome'] }}</h1>
                <br /><br />
                <p class="preco_produto">R${{ $produto['preco'] }}</p>
                <hr />
                <p class="estoque_produto">Estoque:{{ $produto['quantidade'] }}</p>
                <button class="adicionar_carrinho">Qual quantidade deseja comprar?</button>
                <form method="POST" action="{{ route('comprar', ['id' => $produto->id]) }}">
                    @csrf
                    <label class="baixaproduto" for="quantidade">Quantidade:</label>
                    <input type="number" name="quantidade" id="quantidade" value="1">
                    <button type="submit">Comprar</button>
                </form>
            </div>
            <div class="descricao_produto">
                <h1>Description:</h1>
                <p>{{ $produto['descricao'] }}</p>
            </div>
        </div>
    </div>
@endsection
