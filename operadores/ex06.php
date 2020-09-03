<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Operadores NOVOS em PHP7

    //operdor null coalescing
    
    $a = NULL;
    $b = NULL;
    $c = 10;

    echo $a ?? $b ?? $c;
    
    echo "<br>";

    $a = NULL;
    $b = 8;
    $c = 10;

    echo $a ?? $b ?? $c;

    ///////////////////////////////////////////////////////  

?>