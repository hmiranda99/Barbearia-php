<?php
include_once("sentinela-adm.php");

require_once("../classes/Conexao.php");
require_once("../classes/Produto.php");
try {
    $produto = new Produto();
    $listaproduto = $produto->listar();
    $contaProduto = $produto->contar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- - - - - - - - -| CSS | - - - - - - - - -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/private.css">
    <link rel="stylesheet" href="../css/private-produtos.css">
    <link rel="stylesheet" href="../css/conteudo-pag.css">
    <link rel="stylesheet" href="../css/alert.css">
    <!-- - - - - - - - -| FONTE | - - - - - - - - -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;700;900&family=Montserrat:wght@300;400:500&display=swap" rel="stylesheet">
    <!-- - - - - - - - -| ANIMAÇÃO | - - - - - - - - -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- - - - - - - - -| ÍCONE | - - - - - - - - -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- - - - - - - - -| TÍTULO & ÍCONE HEAD | - - - - - - - - -->
    <title>Produtos | Duhel</title>
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <!-- - - - - - - - -| JQUERY/JS | - - - - - - - - -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <div>
        <!-- - - -| NAVBAR CANTO ESQUERDO <<= | - - - -->
        <nav class="nav animate-nav">
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

        <!-- - - -| BARRA SUPERIOR DO SITE ^ | - - - -->
        <header class="header display-f justify-bt align-c content-body f-mont f-700 f-16 principal animate-header">
            <div class="display-f justify-bt align-c header-inicio content-header-list f-mont f-700 f-20">
                <p>Listagem de produtos</p>
                <a href="./form-produto.php" class="display-f align-c justify-c">
                    Cadastrar produtos
                </a>
            </div>
            <div class="header-final principal">
                <a href="../logout-login.php" class="display-f align-c justify-c">
                    <span class="material-icons-round m-r">power_settings_new</span>
                    Sair
                </a>
            </div>
        </header>

        <!-- - - -| CORPO DO SITE ⬇️ | - - - -->
        <div class="content-pagina">
            <div class="content-body">
                <p>
                    <?php
                    foreach ($contaProduto as $linha) {
                        echo ("<label class='f-kanit f-900 f-20 m-b color-grey-ligth'> Existe: " . $linha['Quantidade'] . " produtos cadastrados</label>");
                    }
                    ?>
                </p>
                <!-- - - -| ESTRUTURA QUE PUXA AS INFORMAÇÕES DO BANCO ⬇️ | - - - -->
                <?php
                echo ("<div class='display-f align-c w-100 content-card-content'>");
                foreach ($listaproduto as $linha) {
                    echo ("
                    <div class='card-pag animate_card'>
                        <img src=" . $linha['fotoProduto'] . ">
                        <div class='content-card'>
                            <div class='t-center f-kanit f-900 f-20 upper m-b'>" . $linha['nomeProduto'] . "</div>
                            <div class='t-center f-mont f-200 f-14'>
                                <p>" . $linha['descProduto'] . "</p>
                            </div>

                            <div class='m-t'>
                                <a href='excluir.php?excProduto=" . $linha['idProduto'] . "'> 
                                <div class='f-kanit botao-excluir display-f justify-c align-c'>
                                    <span class='material-icons-round'>delete_forever</span>
                                        Excluir 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    ");
                }
                echo ("</div>");
                ?>
            </div>
        </div>
    </div>
</body>

</html>