<?php

    //"..." aceita quantos valores vierem => Nome do recurso: declaração de tipos escalares
    function soma(int ...$valores) {
        return array_sum($valores);     //soma os valores contidos no array
    }

    echo soma(2,2);
    echo "<br>";
    echo soma(25,33);
    echo "<br>";
    echo soma(1.5,3.2); //o programa vai ignorar as casas decimais
    echo "<br>";

?>