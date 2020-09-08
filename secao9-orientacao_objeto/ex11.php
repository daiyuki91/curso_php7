<?php

function spl_autoload_register($nomeClasse){

    require_once("$nomeClasse.php");
    var_dump($nomeClasse); echo "<br>";

}




$carro = new DelRey();

$carro->acelerar(80);

?>