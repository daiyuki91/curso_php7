<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "dai140891");

//Atualizar dados no banco de dados

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "hideyuki";
$password = "hide0102";
$idusuario = 2;

$stmt->bindParam(":LOGIN",$login);//ligar o stmt com as variáveis criadas
$stmt->bindParam(":PASSWORD",$password);//ligar o stmt com as variáveis criadas
$stmt->bindParam(":ID",$idusuario);//ligar o stmt com as variáveis criadas

$stmt->execute();

echo "Alterado OK!";


?>