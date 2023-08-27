<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flor & Elegância</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/estilos.css">

    <!-- JS -->
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <header class="cabecalho">
        <nav>
            <div class="cabecalho__bloco-logo">
                <img src="./assets/img/hamburguer.svg" alt="icone de hamburguer" class="cabecalho__menu-hamburguer">
                <ul class="lista-menu">
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">ARRANJOS</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">NOSSAS FLORES</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">QUESTIONARIO</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">CONTATO</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">WHATSAPP</a>
                    </li>
                </ul>
                <img src="./assets/img/logo.svg" alt="Logo Polimota" class="cabecalho__logo">
                <p class="cabecalho__titulo">Flor & Elegância</p>
            </div>
            <ul class="cabecalho__lista">
                <li class="cabecalho__item"><a href="#">FLORES</a></li>
                <li class="cabecalho__item"><a href="#">Entrar</a></li>
                <li class="cabecalho__btn"><a href="./cadastro.php">Encante alguém especial</a></li>
            </ul>
            <img src="./assets/img/user.svg" alt="" srcset="" class="cabecalho__login">
        </nav>

    </header>

    <section class="banner">
        <h1 class="banner__titulo">
            Toque corações com a beleza das flores
        </h1>
        <p class="banner__descricao">
            Presenteie com a magia da natureza através da nossa floricultura
        </p>
        <a href="./cadastro.php" class="banner__button">faça o dia de alguem mais feliz</a>
    </section>

    <!-- <picture>
        <source srcset="./assets/img/arranjo de flores amarelas grande.jpg" media="(min-width: 1024px)">
        <img loading="lazy" src="./assets/img/arranjo de flores amarelas pequena.svg" alt="" srcset="" class="imagem__arranjos">
    </picture>i -->

    <img src="./assets/img/arranjo de flores amarelas pequena.svg" alt="" class="imagem__arranjos pequena">
    <img src="./assets/img/arranjo de flores amarelas grande.svg" alt="" class="imagem__arranjos grande">

    <img src="./assets/img/logotipo.svg" alt="" srcset="">

    <section class="vantagens">
        <div class="vantagens__card">
            <img src="./assets/img/Flor.svg" alt="Icone de uma flor" class="vantagens__img">
            <h2 class="vantagens__titulo">Variedade Exclusiva</h2>
            <p class="vantagens__descricao">Oferecemos uma ampla seleção de flores e arranjos únicos, garantindo que você encontre a escolha perfeita para cada ocasião.</p>
        </div>

        <div class="vantagens__card">
            <img src="./assets/img/Desing.svg" alt="Icone de uma paleta de cores" class="vantagens__img">
            <h2 class="vantagens__titulo">Design Criativo</h2>
            <p class="vantagens__descricao">Nossos arranjos são cuidadosamente elaborados por floristas experientes, resultando em criações visualmente deslumbrantes.</p>
        </div>

        <div class="vantagens__card">
            <img src="./assets/img/Entrega.svg" alt="Icone de um caminão" class="vantagens__img">
            <h2 class="vantagens__titulo">Entrega Pontual</h2>
            <p class="vantagens__descricao"> Com o nosso compromisso com a entrega no prazo, suas flores chegarão exatamente quando você precisar, tornando momentos especiais ainda mais memoráveis.</p>
        </div>
    </section>

    <footer class="rodape">
        <p class="rodape__texto">Kauã & Luan</p>
        <section class="rodape__topicos">
            <div class="rodape__servicos">
                <p class="rodape__titulo">Empresas</p>
                <a href="#" class="rodape__item"><img src="./assets/img/SafeSchool.svg" alt="Logo SafeSchool Tech">SafeSchool Tech</a>
                <a href="#" class="rodape__item"><img src="./assets/img/AgroVitalis.svg" alt="Logo AgroVitalis">AgroVitalis</a>
            </div>

            <div class="rodape__servicos">
                <p class="rodape__titulo">Projetos Sociais</p>
                <a href="#" class="rodape__item"><img src="./assets/img/Dia florido.svg" alt="Logo Dia florido">Dia florido</a>
                <a href="#" class="rodape__item"><img src="./assets/img/OpenAgro.svg" alt="Logo OpenAgro">OpenAgro</a>
            </div>
        </section>
    </footer>
</body>

</html>