<?php
    require_once("classes/Conexao.php");
    require_once("classes/Servico.php");

    try{
        $servico = new Servico();
        $listaServico = $servico->listar();

    } catch(Exception $e){
        echo $e->getMessage();
    }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços | Duhel</title>
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <!-- - - - - - - - - | CSS | - - - - - - - - -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/conteudo-pag.css">
    <link rel="stylesheet" href="./css/home-servicos.css">
    <!-- - - - - - - - - | ANIMAÇÃO | - - - - - - - - -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- - - - - - - - - | ICONES | - - - - - - - - -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- - - - - - - - - | FONTE | - - - - - - - - -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;700;900&family=Montserrat:wght@300;400:500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="over">
        <div class="banner-servico">
            <div class="panel-hero content grid-content">
                <div class="heigth">
                    <div class="area-a">
                        <img class="logo" src="./images/logo.png" alt="Logo">
                        <div class="margin-title">
                            <div class="panel-title f-kanit f-900 f-70">
                                <p>
                                    Os melhores profissionais da área.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="area-b menu f-mont f-600 f-20 display-f align-c" id="menu-lateral">
                    <ul>
                        <li class="hover"><a href="./index.php">Home</a></li>
                        <li class="hover"><a href="./home-servicos.php"> Serviços</a></li>
                        <li class="hover"><a href="./home-produtos.php">Produtos</a></li>
                        <li class="hover"><a href="#talk">Fale conosco</a></li>
                        <li class="hover2"><a href="./login.php">Área do profissional</a></li>
                    </ul>
                </div>

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
            </div>
        </div>
    </div>

    <section class="conteudo-pag">
    <!--ESTUTURA DO CARD-->

    <!--| ESTRUTURA QUE PUXA AS INFORMAÇÕES DO BANCO ⬇️ | - - - - -->
    <?php
                echo ("<div class='display-f align-c w-100 content-card-content'>");
                foreach ($listaServico as $linha) {
                    echo ("
                        <div class='card-pag-serv animate_card'>
                            <img src='./private-adm/" . $linha['fotoServico'] . "'>
                            <div class='content-card'>
                                <div class='t-center f-kanit f-900 f-20 upper m-b'>" . $linha['nomeServico'] . "</div>
                                <div class='t-center f-mont f-200 f-14'>
                                    <p>" . $linha['descServico'] . "</p>
                                </div>
                            </div>
                        </div>
                    ");
                }
                echo ("</div>");
                ?>
    </section>
    <section class="footer-bg display-f justify-bt upper">
        <div>
            <img class="img-size" src="./images/nome.png" alt="">
        </div>
        <div class="color-white">
            <div class="display-f align-c margin-bottom">
                <i class="color-wine ri-map-pin-2-fill icon-margin-r"></i>
                <p class="f-kanit f-700 f-14">Duhel Barber shop</p>
            </div>
            <div>
                <p class="f-kanit f-700 f-14">Rua dos Barbudos Lindos, 1234</p>
                <p class="f-kanit f-700 f-14">Cabelo Forte - Paraíso/BR</p>
            </div>
        </div>

        <div class="color-white">
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="./index.php">Home</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="./home-produtos.php">Produtos</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="./home-servicos.php">Serviços</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="#">
                    Fale conosco
                </a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="./login.php">
                    Área do profissional
                </a>
            </p>
        </div>

        <div class="color-white">
            <div class="display-f align-c margin-bottom">
                <i class="color-wine ri-phone-fill icon-margin-r"></i>
                <p class="f-kanit f-700 f-14">(11) 2554-3985</p>
            </div>
            <div class="display-f align-c">
                <i class="color-wine ri-whatsapp-fill icon-margin-r"></i>
                <p class="f-kanit f-700 f-14">(11) 9 8945-6123</p>
            </div>
        </div>

        <div class="color-white">
            <i class="color-wine ri-facebook-fill icon-margin-r"></i>
            <i class="color-wine ri-instagram-fill icon-margin-r"></i>
            <i class="color-wine ri-map-pin-2-fill"></i>
        </div>
    </section>

    <section class="copy display-f justify-c align-c upper">
        <p class="f-kanit f-700 f-14">Copyrigth &copy; Duhel - 2021. Todos os direitos reservados.</p>
    </section>


    <!-- - - - - - - - - | JQUERY/JS | - - - - - - - - -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!------------ link javascript ---------->
    <script src="./js/script.js"></script>
</body>

</html>