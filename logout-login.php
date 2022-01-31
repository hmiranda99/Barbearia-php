<?php

    session_start();
    unset($_SESSION['lgn-adm']);
    unset($_SESSION['snh-adm']);
    session_destroy();
    header("Location: ./login.php");
    
?>