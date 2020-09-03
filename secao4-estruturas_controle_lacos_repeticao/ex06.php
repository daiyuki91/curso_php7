<?php

    /* while */

    $condicao = true;

    while ($condicao) {

        $numero = rand(1,10);

        echo " ";
        if ($numero === 3) {
            echo "TRÊS!!!";
            $condicao = false;
        }

        echo $numero;

    }

?>