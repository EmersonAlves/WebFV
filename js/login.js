function init(){
	var btnLogin = document.getElementById("entra");
	btnLogin.addEventListener("click",function(){
		var email = document.getElementById("email").value;
		var senha = document.getElementById("senha").value;
		request = $.ajax({
		        url: "php/autenticaUser.php",
		        type: "post",
		        data: {emailUser: email, senhaUser: senha}
		});
		// Callback handler that will be called on success
		request.done(function (response, textStatus, jqXHR){
			if(response != "0"){
		 		window.location.href = "principal.php";
		 	}else{

		 	}
		});
		// Callback handler that will be called on failure
		request.fail(function (jqXHR, textStatus, errorThrown){
		    // Log the error to the console
		    console.error(
		        "The following error occurred: "+
		        textStatus, errorThrown
		    );
		});
	});
	function verificaLogin(){
		request = $.ajax({
	        url: "php/checkSession.php",
	        type: "post"
		});
		// Callback handler that will be called on success
		request.done(function (response, textStatus, jqXHR){
			if(response != "0"){
		 		window.location.href = "principal.php";
		 	}
		 	console.log(response);
		});
		// Callback handler that will be called on failure
		request.fail(function (jqXHR, textStatus, errorThrown){
		    // Log the error to the console
		    console.error(
		        "The following error occurred: "+
		        textStatus, errorThrown
		    );
		});
	}
	verificaLogin();
}
function initPrincipal(){
	

}