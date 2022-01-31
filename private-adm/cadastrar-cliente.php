<?php
    require_once("../classes/Cliente.php");
    require_once("../classes/Conexao.php");
    header("Location: form-cliente.php");

    $cliente = new Cliente();
   
    $cliente->setNomeCliente($_POST['nomeCliente']);
    $cliente->setCpfCliente($_POST['cpfCliente']);
    $cliente->setCelularCliente($_POST['celularCliente']);
    $cliente->cadastrar($cliente);
?>