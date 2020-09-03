<?php

    /* Criando funções */
    
    function ola() {
        echo "olá mundo!<br>";
    }

    function ola2() {
        return "olá mundo! - 2<br>";
    }

    ola();
    echo "<br>";

    echo ola2();


    //////////////////////////////
    
    $frase = ola2();

    echo strlen($frase);




?>