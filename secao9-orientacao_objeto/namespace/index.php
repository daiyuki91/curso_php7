<?php

require_once("config.php");

use Cliente\Cadastro; //classe Cadastro da pasta cliente

$cad = new Cadastro();

$cad->setNome("Daiyuki Maia Fujiyoshi");
$cad->setEmail("daiyuki.mf@gmail.com");
$cad->setSenha("123456");

//echo $cad; //método mágico __toString atua para adequar ao comando "echo"

echo "<br><br>";

$cad->registrarVenda();

?>