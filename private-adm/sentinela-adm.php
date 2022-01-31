<?php
    session_start();
    if(($_SESSION['lgn-adm'] != 'adm') ||
        ($_SESSION['snh-adm'] != '123')){
            header("Location: ../index.php");
    }
?>