<?php
    require_once("../classes/Conexao.php");
    require_once("../classes/Contato.php");
    header("Location: ../form-faleconosco.php");

    $contato = new Contato();

    $contato->setEmailContato($_POST['emailContato']);
    $contato->setTextoContato($_POST['txtContato']);
    $contato->cadastrar($contato);
?>