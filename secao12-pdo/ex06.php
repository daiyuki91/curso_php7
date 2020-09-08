<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "dai140891");

//Trabalhando com TRANSACTIONS


$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$idusuario = 1;

$stmt->bindParam(":ID",$idusuario);//ligar o stmt com as variáveis criadas

$stmt->execute();

//$conn->rollback(); //desfazer operação
$conn->commit(); //confirmando operação

echo "Apagado OK!";


?>