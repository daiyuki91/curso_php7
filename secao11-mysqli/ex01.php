<?php

//conectando ao banco de dados "dbphp7" que está no localhost

//endereço IP do banco de dados,
//usuário,
//senha,
//nome do banco de dados
$conn = new mysqli("localhost","root","dai140891","dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

///////////////////////////////////////////////////////////////

//inserindo um novo usuário no banco de dados "dbphp7"

//instrução do MySQL usando o método "prepare"
//os caracteres "?" serão substituídos pelos valores que serão inseridos pelo usuário
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?,?)"); //statment

$stmt->bind_param("ss",$login,$pass);//método que substitui "?" pelo tipo de dado desejado e os respectivos valores

$login = "user";
$pass = "12345";

$stmt->execute();//método para executar os comandos SQL

$login = "user2";
$pass = "asdasdasd";

$stmt->execute();//método para executar os comandos SQL


?>