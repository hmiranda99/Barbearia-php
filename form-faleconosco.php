<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- - - - - - - - - | CSS | - - - - - - - - -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/home-fale.css">
    <link rel="stylesheet" href="./css/global.css">
    <!-- - - - - - - - - | FONTE | - - - - - - - - -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;700;900&family=Montserrat:wght@300;400:500&display=swap" rel="stylesheet">
    <!-- - - - - - - - - | ANIMAÇÃO | - - - - - - - - -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- - - - - - - - - | ICONES | - - - - - - - - -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- - - - - - - - -| ÍCONE | - - - - - - - - -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- - - - - - - - - | TÍTULO & ÍCONE HEAD | - - - - - - - - -->
    <title>Fale conosco | Barber Shop</title>
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
</head>

<body>
    <nav>
        <div class="top-menu" id="menu-topo">
            <div class="display-f align-c justify-bt f-mont f-600 f-20 width-100">
                <div class="logo">
                    <a href="./index.php">
                        <img class="size" src="./images/logo.png" alt="">
                    </a>
                </div>
                <div>
                    <ul class="display-f align-c">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./home-servicos.php"> Serviços</a></li>
                        <li><a href="./home-produtos.php">Produtos</a></li>
                        <li><a href="#talk">Fale conosco</a></li>
                    </ul>
                </div>
                <div class="button display-f align-c justify-c f-kanit f-700 f-14">
                    <a href="./login.php">Área do profissional</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="display-f justify-c">
        <div class="card">
            <div class="label-titulo">
                <label class="display-f align-c justify-c f-mont f-900 f-36 color-label">
                    Fale conosco
                </label>
            </div>
            <form method="post" action="./private-adm/cadastrar-contato.php">
                <label class="f-mont f-500 f-18">Email para contato</label>
                <input class="f-mont f-500 f-14 input" type="email" name="emailContato" id="emailContato" placeholder="contato@email.com">

                <br><br>

                <label class="f-mont f-500 f-18">Deixe sua crítica/avaliação</label>
                <br>
                <textarea class="f-mont f-500 f-14 input" rows="5" cols="50" name="txtContato" id="txtContato" placeholder="Escreva sobre sua experiência em nosso estabelecimento."></textarea>

                <br>

                <input onclick="abrirAlerta3()" class="button3 f-mont f-700 f-18" type="submit" value="Enviar">

            </form>
        </div>
    </main>

    <!-- - - - - - - - -| JQUERY/JS | - - - - - - - - -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!------------ link javascript ---------->
    <script src="./js/script.js"></script>
</body>

</html>