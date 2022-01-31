<?php
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if(($login == 'adm') && ($senha == '123')){
        //<- - - - - | Sessão iniciada para o ADMINISTRADOR |- - - - ->
        session_start();
        $_SESSION['lgn-adm'] = $login;
        $_SESSION['snh-adm'] = $senha;
        header("Location: private-adm/info-produto.php");

    } else{
        header("Location: /login.php");
    }

    // <-------| LOGIN & SENHA -->> ADM
    // LOGIN: adm
    // SENHA: 123
    
?>