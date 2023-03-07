@extends('layouts.site.site')

@section('titulo')
    Mercardinho Bergamini
@endsection

@section('conteudo')
    <section class="produtos-container">
        <div class="produtos-container">
            <div class="tittle-produtos">
                <h1>Produtos:</h1>
                <form class="select" action="">
                    <div class="select-container">
                        <label for='categorias'>Filtra por categoria:</label>
                        <select name="categorias" id="categorias">
                            <option class="selecione" value="default">Selecione uma categoria:</option>
                            <option value="">Mostrar todas"</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria['categoria'] }}">{{ $categoria['categoria'] }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Filtrar">
                    </div>
                </form>
            </div>
            <div class="show-produtos">


            </div>
        </div>
    </section>
@endsection
