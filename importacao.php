<div class="row" style="margin-top: 2%">	
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
			<table id="tabelaheader">
			</table>
		</form>
	<div class="col s2 m2 l2"></div>
	
</div>
<div class="row" style="max-height: 300px; overflow-y: scroll;color:#000">
		<div class="col s2 m2 l2"></div>
		<table class="col s8 m8 l8 subcontainer" id="tablebody">
		</table>
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
        if(dados.usuarios != null){
        	mostraTabela();
        }
    }
    
    function mostraTabela(){
    	var tabelaheader = "<thead><tr><th>IdUsuario</th><th>Cliente</th></tr></thead>";
    	var tabelabody = "<tbody style='max-height: 300px; overflow-y: scroll;'>";
    	for(var i = 0; i < dados.usuarios.length; i++){
    		tabelabody += "<tr><td>"+dados.usuarios[i].idusuario+"</td><td>"+dados.usuarios[i].idusuario+"</td></tr></tr>";
    	}
    	tabelabody += "</tbody>";
    	document.getElementById("tabelaheader").innerHTML = tabelaheader;
    	document.getElementById("tablebody").innerHTML = tabelabody;
		document.getElementById("progress").style.display = "none";

    }
</script>