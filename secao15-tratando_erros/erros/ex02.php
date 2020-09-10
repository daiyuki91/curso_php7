<?php

error_reporting(E_ALL & ~E_NOTICE); //sobrescrevendo o php.ini, sobre a exibição do warning

//causando um warning
$nome = $_GET["nome"];

echo $nome;

?>