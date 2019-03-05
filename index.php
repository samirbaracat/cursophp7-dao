<?php 

	require_once("config.php");
	/*$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);*/

	$adm = new usuario();
	$adm->loadById(1);
	echo $adm;

 ?>