<?php
    if(empty($_SESSION["login"]) ){
        session_destroy ();
        header("Location: usuario-desconectado.php");
    }
?>