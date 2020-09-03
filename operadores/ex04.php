<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Operadores em PHP

    //Operadores de comparação
    $a = 30;
    $b = 55;

    var_dump($a > $b); echo "<br>";
    var_dump($a < $b); echo "<br>";

    echo "<br>";

    var_dump($a == $b); echo "<br>";
    //var_dump($a = $b); echo "<br>"; //atribuição (cuidado!)
    
    echo "<br>";

    $c = 55;
    $d = 55.0;
    var_dump($c == $d); echo "<br>"; //sem considerar o tipo
    var_dump($c === $d); echo "<br>";//considerando o tipo

    echo "<br>";

    var_dump($c != $d); echo "<br>"; //sem considerar o tipo
    var_dump($c !== $d); echo "<br>"; //sem considerar o tipo

?>