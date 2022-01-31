<?php
    require_once("../classes/Produto.php");
    header("Location: form-produto.php");
    $produto = new Produto();

    //- - - | IF PARA VER SE O ARQUIVO EXISTE |- - -//
    if(isset($_FILES['fotoProduto'])){
        $imgProduto = $_FILES['fotoProduto'];

        //- - - | IF PARA VER SE O ARQUIVO DEU ERRO |- - -//
        if($imgProduto['error']){
            die("error");
        }
        
        $nomeArquivo = $imgProduto['name'];

        //Colocando o nome da foto aleatória para não dar conflito no BD & pegando a extensão do arquivo//
        $nomeId = uniqid();
        $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        $path = "imgs/produtos/" . $nomeId . "." . $ext;
        
        move_uploaded_file($imgProduto['tmp_name'], $path);
    }

    $produto->setNomeProduto($_POST['nomeProduto']);
    $produto->setDescProduto($_POST['descProduto']);
    $produto->setFotoProduto($path);
    $produto->cadastrar($produto);
?>
