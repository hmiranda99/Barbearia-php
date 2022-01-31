<?php
include_once("sentinela-adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- - - - - - - - -| CSS | - - - - - - - - -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/private.css">
    <link rel="stylesheet" href="../css/private-clientes.css">
    <!-- - - - - - - - -| FONTE | - - - - - - - - -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;700;900&family=Montserrat:wght@300;400:500&display=swap" rel="stylesheet">
    <!-- - - - - - - - -| ANIMAÇÃO | - - - - - - - - -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- - - - - - - - -| ÍCONE | - - - - - - - - -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- - - - - - - - -| ÍCONE | - - - - - - - - -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- - - - - - - - -| TÍTULO & ÍCONE HEAD | - - - - - - - - -->
    <title>Cadastro Cliente | Duhel</title>
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <!-- - - - - - - - -| JQUERY/JS | - - - - - - - - -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="content">
        <!-- - - -| NAVBAR CANTO ESQUERDO ← | - - - -->
        <nav class="area-a">
            <div class="content-nav">
                <div class="content-img display-f justify-c">
                    <a href="index-private-adm.php"><img class="img" src="../images/logo.png" alt="Logo barbearia Duhel"></a>
                </div>
                <div class="content-menu">
                    <div class="display-f justify-c">
                        <div class="circulo"></div>
                    </div>
                    <div class="content-opcoes">
                        <div class="display-f justify-c">
                            <p class="f-mont f-700 f-18 color-white">Olá, Helinda!</p>
                        </div>
                        <div class="display-f justify-c">
                            <div class="linha"></div>
                        </div>

                        <ul class="principal">
                            <a href="./info-produto.php">
                                <li class="f-mont f-700 f-16">
                                    <span class="material-icons-round m-r">monetization_on</span>
                                    Produtos
                                </li>
                            </a>

                            <a href="./info-cliente.php">
                                <li class="f-mont f-700 f-16">
                                    <span class="material-icons-round m-r">account_circle</span>
                                    Clientes
                                </li>
                            </a>

                            <a href="./info-servico.php">
                                <li class="f-mont f-700 f-16">
                                    <span class="material-icons-round m-r">content_cut</span>
                                    Serviços
                                </li>
                            </a>

                            <a href="./info-agenda.php">
                                <li class="f-mont f-700 f-16">
                                    <span class="material-icons-round m-r">event_available</span>
                                    Agendamento
                                </li>
                            </a>

                            <a href="./info-fale-conosco.php">
                                <li class="f-mont f-700 f-16">
                                    <span class="material-icons m-r">contact_mail</span>
                                    Mensagens
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="area-b">
            <!-- - - -| BARRA SUPERIOR DO SITE ↑ | - - - -->
            <header class="display-f justify-bt align-c content-body f-mont f-700 f-16">
                <div class="display-f justify-bt align-c header-inicio content-header-cad f-mont f-700 f-20">
                    <div>
                        <a href="./info-cliente.php" class="display-f align-c">
                            <span class="material-icons-outlined m-r">arrow_back</span>
                            <p>Cadastro de clientes</p>
                        </a>
                    </div>

                </div>
                <div class="header-final principal">
                    <a href="../logout-login.php" class="display-f align-c justify-c">
                        <span class="material-icons-round m-r">power_settings_new</span>
                        Sair
                    </a>
                </div>
            </header>

            <!-- - - -| FORMULÁRIO DE CADASTRO ✎ | - - - -->
            <main class="display-f align-c justify-c">
                <div class="bg-form ">
                    <div class="content-body">
                        <div class="display-f align-c justify-c content-form">
                            <div class="card">
                                <div class="label-titulo">
                                    <label class="display-f align-c justify-c f-mont f-900 f-36 color-label">
                                        <span class="material-icons-round m-r f-36 color-blue">account_circle</span>
                                        Cadastro cliente
                                    </label>
                                </div>
                                <form method="post" action="cadastrar-cliente.php">
                                    <label class="f-mont f-500 f-18">Nome</label>
                                    <input class="f-mont f-500 f-14 input" required type="text" id="nomeCliente" name="nomeCliente" placeholder="Digite o nome do cliente">
                                    <br> <br>
                                    <label class="f-mont f-500 f-18">CPF</label>
                                    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required class="f-mont f-500 f-14 input" type="text" id="cpfCliente" name="cpfCliente" placeholder="Digite o cpf do cliente">
                                    <br> <br>
                                    <label class="f-mont f-500 f-18">Celular</label>
                                    <input onkeydown="javascript: fMasc( this, mTel );" maxlength="14" class="f-mont f-500 f-14 input" type="text" id="celularCliente" required name="celularCliente" placeholder="Digite o celular do cliente">
                                    <br> <br>
                                    <input onclick="abrirAlerta()"  class="button f-mont f-700 f-18" type="submit" value="Enviar">
                                    <input class="button2 f-mont f-700 f-18" type="reset" value="Limpar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <!------------ link javascript ---------->
    <script src="../js/script.js"></script>
</body>

</html>