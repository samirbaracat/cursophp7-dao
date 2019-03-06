<?php 

	require_once("config.php");
	/*$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);*/

	//carrega um usuario
	/*$adm = new usuario();
	$adm->loadById(1);
	echo $adm;*/

	//carrega uma lista de usuarios
	/*$lista = Usuario::getList();
	echo json_encode($lista);*/

	//carrega uma lista de usuarios buscando pelo login
	/*$search = Usuario::search("A");
	echo json_encode($search);*/

	//carrega um usuario usando o login e a senha
	/*$usuario = new Usuario();
	$usuario->login("ADM","123456");
	echo $usuario;*/

	//criando um novo usuario
	/*$aluno = new Usuario("instrutor", "instrutor");
	$aluno->insert();
	echo $aluno;*/

	$usuario = new Usuario();
	$usuario->loadById(5);
	$usuario->update("mestre","mestre");
	echo $usuario;

 ?>