<?php

    /* if, else e operador ternário */

    $idade = 11;

    $idadeCrianca   = 12;
    $idadeMaior     = 18;
    $idadeMelhor    = 65;

    if ($idade < $idadeCrianca){
        echo "criança";
    }
    else if ($idade < $idadeMaior) {
        echo "Adolescente";
    }
    else if ($idade < $idadeMelhor) {
        echo "Adulto";
    }
    else {
        echo "Idoso";
    }

    echo "<br>";

    //operador ternário
    echo ($idade < $idadeMaior) ? "Menor de Idade":"Maior de Idade";

?>