<?php 
	session_start();
	require_once("model/fachada.class.php");;
	if(isset($_COOKIE['usuario']) || isset($_SESSION['usuario'])){
		if(isset($_COOKIE['usuario'])){
			$_SESSION['usuario'] = $_COOKIE['usuario'];
		}
		echo json_encode($_SESSION['usuario']);
	}else{
		echo 0;
	}
?>