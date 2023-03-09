{{-- <header id="site-header">
    <div id="header-logo">
        <a href="{{ route('siteIndex') }}">
            <img src="{{ asset('site/img/logomercado.jpeg') }}" alt="Logo Mercado">
        </a>
    </div>
    <div id="header-form">
        <div>
            <a href="http://127.0.0.1:8000/siteIndex" alt="home">Home</a>
        </div>
        <div>
            <a href="http://127.0.0.1:8000/sobrenos" alt="sobre-nós">Contato</a>
        </div>
        <form class="search" action="">
            <input type="text id="search" name=" search">
            <button type="submit">
                <span class="material-symbols-outlined">search</span>
            </button>
        </form>
    </div>

</header>
<hr id="hr-header"> --}}
<header>
    <nav>
        <a href="" class="logo">Mercadinho Bergamini</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="/"></a>Inicio</li>
            <li><a onclick="openPage('http://127.0.0.1:8000/sobrenos')">Sobre</a></li>
            <li><a href="/"></a>Produtos</li>

        </ul>
    </nav>
</header>
