<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- - - - - - - - - | CSS | - - - - - - - - -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/global.css">
    <!-- - - - - - - - - | FONTE | - - - - - - - - -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;700;900&family=Montserrat:wght@300;400:500&display=swap" rel="stylesheet">
    <!-- - - - - - - - - | ANIMAÇÃO | - - - - - - - - -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- - - - - - - - - | ICONES | - - - - - - - - -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- - - - - - - - - | TÍTULO & ÍCONE HEAD | - - - - - - - - -->
    <title>Duhel | Barber Shop</title>
    <link rel="icon" type="image/x-icon" href="./images/icon.png">

</head>

<body>
    <div class="over">
        <div class="content-hero">
            <div class="panel-hero content grid-content">
                <div class="heigth">
                    <div class="area-a">
                        <img class="logo" src="./images/logo.png" alt="Logo">
                        <div class="margin-title">
                            <div class="panel-title f-kanit f-900 f-70">
                                <p>
                                    Um novo conceito de barbearia.
                                </p>
                            </div>
                            <div class="panel-title f-mont f-200 f-18">
                                <p>
                                    Onde passado e futuro se unem, tradição e modernidade se encontram, conservadorismo e tendências coexistem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="area-b menu f-mont f-600 f-20 display-f align-c" id="menu-lateral">
                    <ul>
                        <li class="hover"><a href="#home">Home</a></li>
                        <li class="hover"><a href="#services"> Serviços</a></li>
                        <li class="hover"><a href="#products">Produtos</a></li>
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
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#services"> Serviços</a></li>
                                    <li><a href="#products">Produtos</a></li>
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


    <section class="servicos-bg display-f justify-c align-c" id="services">
        <div class="label-servicos display-f justify-c align-c">
            <div class="width-100">
                <p class="f-kanit f-60 f-900 width-100">Serviços</p>
                <p class="f-kanit f-700 f-20 width-100">A melhor barbearia da américa latina!</p>

                <div class="button-margin display-f">
                    <a href="./home-servicos.php" class="button1 f-kanit f-700 f-16 display-f align-c justify-c">Conferir<i class="icon-margin ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
        <img class="img" src="./images/servicos.png" alt="serviços">
    </section>

    <section class="produtos-bg display-f justify-c align-c" id="products">
        <img class="img" src="./images/produtos.png" alt="produtos">
        <div class="label-produtos display-f justify-c align-c">
            <div class="width-100">
                <p class="f-kanit f-60 f-900 width-100">Produtos</p>
                <p class="f-kanit f-700 f-20 width-100">Não deixe de conferir os melhores produtos do Brasil!</p>

                <div class="button-margin display-f">
                    <a href="./home-produtos.php" class="button-home f-kanit f-700 f-16 display-f align-c justify-c">Conferir<i class="icon-margin ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="trabalhos-bg">
        <div class="trabalhos f-kanit f-36 f-900 display-f justify-c align-c">
            Trabalhos
        </div>

        <div class="display-f">
            <img class="size-img" src="./images/1.png" alt="">
            <img class="size-img" src="./images/2.png" alt="">
            <img class="size-img" src="./images/3.png" alt="">
            <img class="size-img" src="./images/4.png" alt="">
            <img class="size-img" src="./images/5.png" alt="">
        </div>
        <div class="display-f">
            <img class="size-img" src="./images/6.png" alt="">
            <img class="size-img" src="./images/7.png" alt="">
            <img class="size-img" src="./images/8.png" alt="">
            <img class="size-img" src="./images/9.png" alt="">
            <img class="size-img" src="./images/10.png" alt="">
        </div>
        <div></div>
    </section>

    <section class="fale-bg display-f" id="talk">
        <div class="fale f-kanit f-36 f-900 display-f justify-c align-c">
            Fale conosco
        </div>
        <div class="enviar f-kanit f-700 f-16 display-f justify-c align-c">
            <div class="icon-margin-r">
                <a href="./form-faleconosco.php">
                    Enviar menssagem
                </a>
            </div><i class="ri-arrow-right-line color-white"></i>
        </div>
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
                <a href="#home">Home</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="#products">Produtos</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="#services">Serviços</a>
            </p>
            <p class="f-kanit f-700 f-14 margin-bottom">
                <a href="./form-faleconosco.php">
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