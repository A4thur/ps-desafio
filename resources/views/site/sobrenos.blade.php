<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre-nós</title>
    <link rel="stylesheet" href="{{ asset('site/css/sobrenos.css') }}">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="">Sobre-nós</a>
                </li>
                <li>
                    <a href="http://127.0.0.1:8000/siteIndex">Home</a>
                </li>
                <li>
                    <a onclick="openPage('https://wa.me/552732581397')">Contato</a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="center">
                <img src="{{ asset('site/img/logomercado.jpeg') }}" alt="Logo Mercado">
            </div>
            <h1>Mercadinho Bergamini</h1>
            <h2>Mercado, Padaria e Hortifrutti</h2>
        </header>
        <main>
            <section>
                <h3>Sobre-nós</h3>
                <p>
                    Somos um mercado com uma variedade de produtos hortifrutigranjeiros com um leque de opções com
                    produtos diversos. Aqui você sempre encontra produtos selecionados, fresquinhos com muita dedicação
                    e compromisso ao nosso amigo cliente.
                </p>
            </section>
            <section>
                <h3>Nossa história</h3>
                <p>
                    Com um slongan clichê: Nossa família servindo a sua! Mantivemos nossa estratégia e compromisso de
                    fomentar, desenvolver e acelerar o crescimento de marcas e produtores locais.
                </p>
            </section>
            <section>
                <h3>Nossos valores</h3>
                <p>
                    Todas as nossas ações visam aproximar nossos clientes da natureza, trazendo o que há de melhor para
                    as suas vidas e o seu dia-a-dia. Dessa forma, a preservação do meio ambiente e o respeito às pessoas
                    que nos cercam é algo inerente ao nosso negócio e um valor do qual não abrimos mão.
                </p>
            </section>
        </main>
        <footer>
            <a>
                <img src="{{ asset('site/img/logoig.png') }}" target="_blank" rel="noopener noreferrer"
                    onclick="openPage('https://www.instagram.com/mercadinhobergamini/')">
                <p>Instagram</p>
            </a>
            <a>
                <img src="{{ asset('site/img/logowpp.png') }}" target="_blank" rel="noopener noreferrer"
                    onclick="openPage('https://wa.me/552732581397')">
                <p>Whatsapp</p>
            </a>

        </footer>
    </div>
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>
