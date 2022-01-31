<?php
    require_once("../classes/Servico.php");
    header("Location: form-servico.php");
    $servico = new Servico();

    //- - - | IF PARA VER SE O ARQUIVO EXISTE |- - -//
    if(isset($_FILES['fotoServico'])){
        $imgServico = $_FILES['fotoServico'];

        //- - - | IF PARA VER SE O ARQUIVO DEU ERRO |- - -//
        if($imgServico['error']){
            die("error");
        }
        
        $nomeArquivo = $imgServico['name'];

        //Colocando o nome da foto aleatória para não dar conflito no BD & pegando a extensão do arquivo//
        $nomeId = uniqid();
        $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        $path = "imgs/servicos/" . $nomeId . "." . $ext;
        
        move_uploaded_file($imgServico['tmp_name'], $path);
    }

    $servico->setNomeServico($_POST['nomeServico']);
    $servico->setDescServico($_POST['descServico']);
    $servico->setFotoServico($path);
    $servico->cadastrar($servico);
?>