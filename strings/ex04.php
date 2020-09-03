<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: Operadores em PHP

    //Operadores de strings
    
    $frase = "A repetição é mãe da rentenção.";

    $palavra = "mãe";

    $q = strpos($frase, $palavra); //retorna o índice da posição que começa "mãe"
    var_dump($q); echo "<br>";

    $texto = substr($frase,0,$q); //retorna de 0 até $q
    echo $texto; echo "<br>";

    var_dump($texto); echo "<br>";

    $texto2 = substr($frase,$q + strlen($palavra),strlen($frase)); //retorna de depois de mãe até o final da frase
    echo $texto2; echo "<br>";

    var_dump($texto2); echo "<br>";

    echo "<br>";
    /////////////////////////////////


?>