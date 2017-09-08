<?php 
	require_once("conexao.php");
	$lista = json_decode($_POST['ordem']);
	
	if($lista->tipo == 0){
		$query = "INSERT INTO usuario(tipo,email,idusuario,razaosocial,tipopessoa,cpfcnpj) VALUES "; 
		$x = 0;
		foreach($lista->dados as $usuario){
			if($x > 0){
				$query .= ",";
			}
			$query .= "('$usuario->tipo','$usuario->email','$usuario->idusuario','$usuario->nomeexibicao','$usuario->tipopessoa','$usuario->cpfcnpj')"; 
			$x++;
		}
		mysqli_query($con,$query);
		echo $query;
	}else if($lista->tipo == 1){
		$query = "INSERT INTO produto(idproduto,descricao,unidade,precovenda) VALUES "; 
		$x = 0;
		foreach($lista->dados as $produto){
			if($x > 0){
				$query .= ",";
			}
			$query .= "('$produto->idproduto','$produto->descricao','$produto->unidade','$produto->precovenda')"; 
			$x++;
		}
		mysqli_query($con,$query);
		echo $query;
	}else if($lista->tipo == 4){
		$query = "INSERT INTO endereco(idendereco,bairro,cep,complemento,logradouro,numero,observacao,codigocidade,codigoestado,idusuario,endereco) VALUES "; 
		$x = 0;
		foreach($lista->dados as $endereco){
			if($x > 0){
				$query .= ",";
			}
			$query .= "('$endereco->idendereco','$endereco->bairro','$endereco->cep','$endereco->complemento','$endereco->logradouro','$endereco->numero','$endereco->observacao','$endereco->codigocidade','$endereco->codigoestado','$endereco->idusuario','$endereco->endereco')"; 
			$x++;
		}
		mysqli_query($con,$query);
		echo $query;
	}
?>