<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
      	<!--Let browser know website is optimized for mobile-->
     	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>FVComercial</title>
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	  	<link rel="stylesheet" href=css/style.css>
	  	<!-- Compiled and minified JavaScript -->
	  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	  	<script src="js/login.js"></script>

	</head>
	<body onload="init()">
		<div class="row" style="margin-top: 5%;">
			<div class="col s1 m4 l4"></div>
			<div class="col s10 m4 l4 subcontainer">
				<div class="row">
				    <form class="col s12" method="POST" action="">
				    	<div class="row">
				    		<div class="col s4"></div>
				    		<img class="col s4" src="icon/fvicon.png"/>
				    		<div class="col s4"></div>
				    	</div>
					    <div class="row">
					        <div class="input-field col s12">
					          	<input id="email" type="email" class="validate" required="">
					          	<label for="email">E-mail</label>
					        </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s12">
					          	<input id="senha" type="password" class="validate" required="">
					          	<label for="senha">Senha</label>
					        </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s12">
					          	<button class="btn waves-effect waves-light" type="button"  id="entra" name="entra">ENTRAR
								    <i class="material-icons right">send</i>
								 </button>
					        </div>
					    </div>
				    </form>
				</div>
			</div>
			<div class="col s1 m4 l4"></div>
		</div>
	</body>
</html>