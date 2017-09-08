<div class="row" style="margin-top: 2%;margin-bottom:0px;">	
	<div class="col s2 m2 l2"></div>
		<form action="#" class="col s8 m8 l8 subcontainer">
			<div class="file-field input-field">
			<div class="btn">
				<span>Arquivo</span>
				<input type="file" onchange="onChange(event)">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
			</div>
			<div class="progress" id="progress" style="display: none">
			    <div class="indeterminate"></div>
			</div>
			<label id="qtde"></label>
			<div class="row">
				<div class="col s5 m5 l5"></div>
				<div class="col s2 m2 l2"><button class="btn" id="enviarDados" style="display:none">Enviar</button></div>
				<div class="col s5 m5 l5"></div>
			</div>
		</form>
	<div class="col s2 m2 l2"></div>
	
</div>
<script type="text/javascript">
	var dados;
	function onChange(event) {
		document.getElementById("progress").style.display = "block";
        var reader = new FileReader();
        reader.onload = onReaderLoad;
        reader.readAsText(event.target.files[0]);
    }

    function onReaderLoad(event){
        dados = JSON.parse(event.target.result);
        if(dados.dados != null){
        	//mostraTabela();
			document.getElementById("progress").style.display = "none";
			document.getElementById("qtde").innerHTML = "Quantidade de Registros: "+dados.dados.length;
			document.getElementById("enviarDados").style.display = "block";			
        }
    }
   
	document.getElementById("enviarDados").addEventListener("click",function(){

		document.getElementById("qtde").innerHTML = "Aguarde alguns minutos";
		document.getElementById("enviarDados").style.display = "none";
		document.getElementById("progress").style.display = "block";
		request = $.ajax({
		        url: "php/incluirDados.php",
		        type: "post",
		        data: {'ordem': JSON.stringify(dados)}
			});
			request.done(function (response, textStatus, jqXHR){
				document.getElementById("progress").style.display = "none";
				document.getElementById("qtde").innerHTML = "Finalizado : "+dados.dados.length+" registro atualizado no sistema ";
				console.log(response);
			});
			request.fail(function (jqXHR, textStatus, errorThrown){
			    console.error(
			        "The following error occurred: "+
			        textStatus, errorThrown
		    );
		});
	});
</script>