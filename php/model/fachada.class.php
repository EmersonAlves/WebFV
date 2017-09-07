<?php 
	require_once("Usuario.class.php");
	class Fachada{
		function autenticaUsuario($usuario){
			include("conexao.php");
			$result = mysqli_query($con,"SELECT * FROM usuario WHERE email = '$usuario->email' AND senha = '$usuario->senha'");
			if( mysqli_num_rows($result)){
				$dados =  mysqli_fetch_array($result);
				$Fachada = new Fachada();
				$Fachada->startSession(false,"usuario",$dados);
				echo json_encode($dados);
			}else{
				echo "0";
			}
		}
		function startSession($manterConectado,$session,$valor){	
			session_start();
			$_SESSION[$session] = $valor;
			if($manterConectado == "true"){
				setcookie($session, $_SESSION[$session], PHP_INT_MAX);
			}
		}
	}

?>