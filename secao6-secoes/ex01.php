<?php

    /* seções */
    //variável local: válida somente no programa atual ou que veio através de include/require
    //variável de seção: semelhante à variável superglobal, são enxergadas enquanto o usuário está logado no site

    //a seção é criada quando um usuário conecta em um site

    session_start();

    $_SESSION["nome"] = "Hcode";

?>