<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "dai140891");

//inserindo dados no banco de dados

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");

$login = "daiyuki";
$password = "dmj140891";

$stmt->bindParam(":LOGIN",$login);//ligar o stmt com as variáveis criadas
$stmt->bindParam(":PASSWORD",$password);//ligar o stmt com as variáveis criadas

$stmt->execute();

echo "Inserido OK!";


?>