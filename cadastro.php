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
        <h2 class="questionario__titulo">Conte um pouco sobre você</h2>
        <div class="questionario__grid">
            <form action="dados.php" method="get" class="questionario__form">
                <label for="nome" class="questionario__label">Qual o seu nome?</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="questionario__resposta" required>

                <label for="idade" class="questionario__label">Qual a sua idade?</label>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade" class="questionario__resposta" required>

                <label for="sexo" class="questionario__label">Qual o seu sexo?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="sexo" id="sexo-m" class="questionario__resposta" value="Masculino" required> <label for="sexo-m">Masculino</label>
                    <input type="radio" name="sexo" id="sexo-f" class="questionario__resposta" value="Feminino" required> <label for="sexo-f">Feminino</label>
                </div>

                <label for="email" class="questionario__label">Insira seu e-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="questionario__resposta" required>

                <label for="telefone" class="questionario__label">Insira seu telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" class="questionario__resposta" required maxlength="15">

                <label for="cpf" class="questionario__label">Insira seu CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" class="questionario__resposta" required maxlength="11">

                <label for="flores" class="questionario__label">Qual a sua flor preferida?</label>
                <input type="text" id="flores" name="flores" placeholder="Conte-nos a sua flor preferida" class="questionario__resposta" required>

                <label class="questionario__label">Custuma comprar flores?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="compraFlores" id="sim" class="questionario__resposta" value="Sim" required> <label for="sim">Sim</label>
                    <input type="radio" name="compraFlores" id="nao" class="questionario__resposta" value="Não" required><label for="nao">Não</label>
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