@extends('layouts.site.site')

@section('titulo')
    Mercardinho Bergamini
@endsection

@section('conteudo')
    <section class="section-container">
        <div class="search-filter">
            <div class="produtos-container">
                <div class="tittle-produtos">
                    <form class="select" action="{{ route('produtofiltro') }}">
                        <div class="select-container">
                            <label for='categorias'>Filtro por categoria:</label>
                            <select name="categorias" id="categorias">
                                <option class="selecione" value="default">Selecione uma categoria:</option>
                                <option value="">Mostrar todas"</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria['categoria'] }}">{{ $categoria['categoria'] }}</option>
                                @endforeach
                            </select>
                            <input id="botao-filtro" type="submit" value="Filtrar">
                        </div>
                    </form>
                </div>
            </div>
            <label for="switch">
                <input type="checkbox" id="switch">Dark Mode
            </label>
            <div class="search">
                <form class="search" action="{{ route('produtobusca') }}">
                    <input type="text id="search" name=" search">
                    <button type="submit">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>
            </div>
        </div>
        <h1 id="titulo-produtos">Produtos</h1>
        <div class="painel">
            @foreach ($produtos as $produto)
                <div class="card-container">
                    <div class="flip cartao" @if ($produto['quantidade'] > 0) onclick="flipcard(this)" @endif>
                        <div class="face front">
                            <div class="{{ $produto['quantidade'] == 0 ? 'card0' : 'card' }}">
                                <div>
                                    <img class="imagem-produto" src="/storage/{{ $produto['imagem'] }}" />
                                </div>
                                <div class="nome-produto">
                                    <p> {{ $produto['nome'] }}</p>
                                </div>
                                <div class="preco-produto">
                                    <p>R${{ $produto['preco'] }}</p>
                                </div>
                                <button class="button-compra">
                                    <a class="button-compratext" href="{{ route('compra', $produto->id) }}">
                                        Comprar
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="face back">
                            <div class="{{ $produto['quantidade'] == 0 ? 'card0' : 'card' }}">
                                <div class="descricao-produto">
                                    <p> {{ $produto['descricao'] }}</p>
                                </div>
                                <div class="quantidade-produto">
                                    <p>Estoque: {{ $produto['quantidade'] }} unidades</p>
                                </div>
                                <button class="button-compra">
                                    <a class="button-compratext" href="{{ route('compra', $produto->id) }}">
                                        Comprar
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script>
                function flipcard(element) {
                    element.classList.toggle("flip")
                }
            </script>
        </div>
        </div>
    </section>
@endsection
