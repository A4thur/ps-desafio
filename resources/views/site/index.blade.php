@extends('layouts.site.site')

@section('titulo')
    Mercardinho Bergamini
@endsection

@section('conteudo')
    <section class="section-container">
        <h1>Produtos:</h1>
        <div class="produtos-container">
            <div class="tittle-produtos">
                <form class="select" action="{{ route('produtofiltro') }}">
                    <div class="select-container">
                        <label for='categorias'>Filtra por categoria:</label>
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
        <div class="painel">
            @foreach ($produtos as $produto)
                <div class="card-container">
                    <div class="flip cartao" onclick="flipcard(this)">
                        <div class="face front">
                            <div class="card">
                                <div class="nome-produto">
                                    <p> {{ $produto['nome'] }}</p>
                                </div>
                                <div>
                                    <img class="imagem-produto" src="{{ $produto['imagem'] }}" />
                                </div>
                                <div class="preco-produto">
                                    <p>R${{ $produto['preco'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="face back">
                            <div class="card">
                                <div class="descricao-produto">
                                    <p> {{ $produto['descricao'] }}</p>
                                </div>
                                <div class="quantidade-produto">
                                    <p>{{ $produto['quantidade'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('compra', $produto->id) }}">
                    Comprar
                </a>
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
