<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Operadores NOVOS em PHP7

    //operdor spaceship
    
    $a = 50;
    $b = 35;
    var_dump($a <=> $b); echo "<br>"; //resultado 1

    $a = 35;
    $b = 35;
    var_dump($a <=> $b); echo "<br>"; //resultado 0

    $a = 50;
    $b = 80;
    var_dump($a <=> $b); echo "<br>"; //resultado -1

    echo "<br>";

    ///////////////////////////////////////////////////////  

?>