<?php

function incluirClasses($nomeClasse){
    if (file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasses"); //funções "spl" são usadas para auxiliar em diversos pontos da programação PHP
spl_autoload_register(
    //função anônima
    function($nomeClasse){
    if (file_exists("abstrat".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
        require_once("abstrat".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    }
});

$carro = new DelRey();

$carro->acelerar(80);

?>