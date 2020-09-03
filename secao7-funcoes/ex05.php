<?php

    $a = 10;

    //passagem de parâmetro por cópia
    function trocaValor($a) {
        $a += 50;

        return $a;
    }

    echo trocaValor($a);
    echo "<br>";
    echo $a;

    //////////////////////////////////
    echo "<br>"; echo "<br>";
    //////////////////////////////////

    //passagem de parâmetro por referência
    function trocaValor2(&$a) {
        $a += 50;

        return $a;
    }

    echo trocaValor2($a);
    echo "<br>";
    echo $a;

?>