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

    <section class="questionario">
        <h2 class="questionario__titulo">Responda a enquete e contribua conosco</h2>
        <div class="questionario__grid">
            <form action="dados.php" method="get" class="questionario__form">
                <label for="nome" class="questionario__label">Qual o seu nome?</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="questionario__resposta" required>

                <label for="idade" class="questionario__label">Qual a sua idade?</label>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade" class="questionario__resposta" required>

                <label for="flores" class="questionario__label">Qual a sua flor preferida?</label>
                <input type="text" id="flores" name="flores" placeholder="Conte-nos a sua flor preferida" class="questionario__resposta" required>

                <label for="ocasiao-compra" class="questionario__label">Qual é a ocasião mais comum para a compra de flores?</label>
                <input type="text" id="ocasiao-compra" name="ocasiao-compra" placeholder="Conte-nos a ocasião mais comum para comprar flores na sua opnião" class="questionario__resposta" required>

                <label for="cheiro" class="questionario__label">Quais aromas de flores você mais gosta?</label>
                <input type="text" id="aromas" name="cheiro" placeholder="Conte-nos os seus aromas de flores preferidos" class="questionario__resposta" required>

                <label class="questionario__label">Você costuma comprar flores para presentear alguém?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="compraFlores" id="sim" class="questionario__resposta" value="Sim" required> <label for="sim">Sim</label>
                    <input type="radio" name="compraFlores" id="nao" class="questionario__resposta" value="Não" required><label for="nao">Não</label>
                </div>

                <label class="questionario__label">Você prefere flores sazonais ou flores disponíveis o ano todo?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="preferencia" id="sazonais" class="questionario__resposta" value="Flores sazonais" required> <label for="sazonais">Flores sazonais</label>
                    <input type="radio" name="preferencia" id="disponiveis" class="questionario__resposta" value="Flores disponíveis o ano todo" required><label for="disponiveis">flores disponíveis o ano todo</label>
                </div>




                <input type="submit" value="Enviar" class="questionario__btn"></input>
            </form>

            <img src="./assets/img/Mulher com flores.svg" alt="Mulher segurando um arranjo de flores" class="questionario__img">
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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>