<?php 
	require_once("model/fachada.class.php");
	require_once("model/Usuario.class.php");

	$usuario = new Usuario();
	$usuario->setEmail($_POST["emailUser"]);
	$usuario->setSenha($_POST["senhaUser"]);
	$fachada = new Fachada();
	$fachada->autenticaUsuario($usuario);

	
?>