<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Operadores em PHP

    //ordem de precedência
    
    $a = 7 + 3 / 2;
    echo $a; echo "<br>";

    $a = (7 + 3) / 2;
    echo $a; echo "<br>";

    echo "<br>";
    ///////////////////////////////

    $a = (10 + 3) / 2 > 5 && 10 + 5 < 3; //true AND false
    var_dump($a); echo "<br>";

    $a = (10 + 3) / 2 > 5 && 10 + 5 < 20; //true AND true
    var_dump($a); echo "<br>";

    echo "<br>";
    ///////////////////////////////

    $a = (10 + 3) / 2 > 5 || 10 + 5 < 20; //true OR true
    var_dump($a); echo "<br>";

?>