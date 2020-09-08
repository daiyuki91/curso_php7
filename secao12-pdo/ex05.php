<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "dai140891");

//Apagar dados no banco de dados

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$idusuario = 3;

$stmt->bindParam(":ID",$idusuario);//ligar o stmt com as variáveis criadas

$stmt->execute();

echo "Apagado OK!";


?>