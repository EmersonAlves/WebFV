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
	<body onload="initPrincipal()">
		<nav class="nav-extended">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">FV Comercial</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="collapsible.html">Sair</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="badges.html">Components</a></li>
					<li><a href="collapsible.html">JavaScript</a></li>
				</ul>
			</div>
			<div class="nav-content">
				<ul class="tabs tabs-transparent">
					<li class="tab"><a class="active" href="#test1">Ultimos Orcamentos</a></li>
					<li class="tab"><a href="#test2">Atualizar Dados</a></li>
  				</ul>
		    </div>
		</nav>
		  <div id="test1" class="col s12">
		  	<?php require_once("listaOrcamentos.php") ?>
 		  </div>
		  <div id="test2" class="col s12">
		  	<?php require_once("importacao.php") ?>
 		  </div>
	</body>
</html>