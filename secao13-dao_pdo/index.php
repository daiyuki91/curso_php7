<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/*
//carrega um usuário
$user = new Usuario();
$user->loadById(4);
echo $user;
*/

/*
//carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//carrega uma lista de usuários buscando pelo login
$busca = Usuario::search("yuki");
echo json_encode($busca);
*/

/*
//carrega um usuário usando o login e a senha
$usuario = new Usuario(); //instanciou (criou um objeto)
$usuario->login("daiyuki","dmj140891");
echo $usuario;
*/


/*
//Inserir novo usuario - versão sem construtor
$aluno = new Usuario();
$aluno->setDeslogin("yukio");
$aluno->setDessenha("yukio220361");
$aluno->insert();
echo $aluno; //mostrar na tela
*/

/*
//Inserir novo usuario - versão com construtor
$aluno = new Usuario("YDHN","ydhn.1987");
$aluno->insert();
echo $aluno; //mostrar na tela
*/

/*
//Atualizando dados de um usuário
$usuario = new Usuario();
$usuario->loadById(16); //carregamos o usuario id=16
$usuario->update("professor","prof123");
echo $usuario;
*/

//Deletando um usuário
$usuario = new Usuario();
$usuario->loadById(16); //carregamos o usuario id=16
$usuario->delete();
echo $usuario;

?>