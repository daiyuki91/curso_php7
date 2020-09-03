<?php

    require_once("config.php");

    session_unset($_SESSION['nome']); //limpa a variável de sessão, mas continua reconhencendo como sendo o mesmo usuário

    echo $_SESSION['nome'];

    session_destroy(); //limpa a variável de sessão e "apaga" o usuário

?>