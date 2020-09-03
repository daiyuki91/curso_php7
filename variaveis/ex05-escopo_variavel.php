<?php

    //Curso Completo PHP7 - Hcode / Udemy
    //Daiyuki Maia Fujiyoshi
    //01/09/2020

    //Assunto: escopo de variável


    $nome = "Daiyuki";

    function teste() {
        //escopo da função
        echo $nome; //diferente do $nome do escopo principal
    }

    function teste2() {
        
        global $nome;
        echo $nome;

    }

    function teste3() {
        
        $nome = "Hideyuki";
        echo $nome." "."teste3";

    }

    teste(); //invocando a função
    echo "</br>";
    teste2(); //invocando a função
    echo "</br>";
    teste3(); //invocando a função

?>