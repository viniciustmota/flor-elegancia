<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flor & Elegância</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/estilos.css">

    <!-- JS -->
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $cpf = $_GET['cpf'];
    $flor = $_GET['flores'];
    $compraFlores = $_GET['compraFlores'];
    ?>

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

    <section class="banner banner-dados">
        <p class="banner__descricao banner__descricao-dados">
            <?php echo ("Olá, $nome") ?>
        </p>
        <h1 class="banner__titulo">
            <?php echo ("Confirme seus dados
e comece os estudos") ?>
        </h1>
    </section>

    <section class="dados">
        <div class="dados__conteudo">
            <?php
            echo ("<div class='dados__div'>
                    <ul class='dados__lista'>
                        <li class='dados__item'>Nome: <span>$nome</span></li>
                        <li class='dados__item'>Idade: <span>$idade anos</span></li>
                        <li class='dados__item'>Genêro: <span>$sexo</span></li>
                        <li class='dados__item'>E-mail: <span>$email</span></li>
                        <li class='dados__item'>Telefone: <span>$telefone</span></li>
                        <li class='dados__item'>CPF: <span>$cpf</span></li>
                        <li class='dados__item'>Flor preferida: <span>$flor</span></li>   
                        <li class='dados__item'>Costuma comprar flores: <span>$compraFlores</span></li>   
                    </ul>
                </div>
                "); ?>
            <button type="submit" class="dados__btn">confimar</button>
        </div>
        <img src="./assets/img/Flor vermelha.svg" alt="Imagem de uma flor vermelha" class="dados__img">
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