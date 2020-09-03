<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Include e Require

    //include "inc/ex01.php"; //tenta funcionar mesmo que o arquivo não exista ou não esteja funcionando corretamente + tem mais recursos (?)

    require_once "inc/ex01.php"; //obriga que o arquivo exista E funcionando corretamente

    //RECOMENDA-SE USAR O REQUIRE!!!!


    require_once "inc/ex01.php"; //ele vai ignorar esta segunda chamada

    $resultado = soma(10,25);

    echo $resultado;

?>