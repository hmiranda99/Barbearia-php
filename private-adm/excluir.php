<?php   
    require_once('../classes/Conexao.php');

    // - - - - - | EXCLUIR AGENDAMENTO | - - - - - //
    if(isset($_GET['excAgenda'])){

        header("Location: info-agenda.php");
        $id = $_GET['excAgenda'];

        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbagenda
                               WHERE idAgenda = '$id'");
        $stmt->execute();
                   
    }

    // - - - - - | EXCLUIR SERVIÇO | - - - - - //
    if(isset($_GET['excServico'])){
        
        header("Location: info-servico.php");
        $id = $_GET['excServico'];

        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbservico
                               WHERE idServico = '$id'");
        $stmt->execute();
                   
    }

    // - - - - - | EXCLUIR CLIENTE | - - - - - //
    if(isset($_GET['excCliente'])){
        
        header("Location: info-cliente.php");
        $id = $_GET['excCliente'];

        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbcliente
                               WHERE idCliente = '$id'");
        $stmt->execute();
                   
    }

    // - - - - - | EXCLUIR PRODUTO | - - - - - //
    if(isset($_GET['excProduto'])){
            
        header("Location: info-produto.php");
        $id = $_GET['excProduto'];

        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbproduto
                            WHERE idProduto = '$id'");
        $stmt->execute();
                
    }

    // - - - - - | EXCLUIR CONTATO | - - - - - //
    if(isset($_GET['excContato'])){
            
        header("Location: info-fale-conosco.php");
        $id = $_GET['excContato'];

        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbcontato
                            WHERE idContato= '$id'");
        $stmt->execute();
                
    }












?>