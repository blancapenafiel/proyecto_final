$(document).ready(function(){

	$("#registro span").click(function(){
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioL").removeClass("error-validation");
		$("#contraL").removeClass("error-validation");
		$("#login").css("display","block");
		$("#registro").css("display","none");
		
	});	
	$("#login span").click(function(){
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioR").removeClass("error-validation");
		$("#contraR").removeClass("error-validation");
		$("#login").css("display","none");
		$("#registro").css("display","block");
	});
	
	$("#registar").click(function(){

		msg = "";

		if($("#usuarioR").val() == ""){
			msg += "El campo usuario está vacío <br>";
			$("#usuarioR").addClass("error-validation");
		} else {
			$("#usuarioR").removeClass("error-validation");
		}
		if($("#contraR").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraR").addClass("error-validation");
		} else {
			$("#contraR").removeClass("error-validation");
		}

	if($("#contraRR").val() == ""){
			msg += "El campo repite contraseña está vacío <br>";
			$("#contraRR").addClass("error-validation");
		} 
		else 
		{
			if ($("#contraRR").val() != $("#contraR").val())
			{
			msg += "El campo contraseña no coincide <br>";	
			}
			else
			{
			$("#contraRR").removeClass("error-validation");	
			}
			
		}		

  		$("#errorsR").html(msg);

  		if(msg == ""){
  			
  			$.ajax({

  				type: 'post',
  				url: '/proyecto_final/accede/registro',
  				data: $("#registro").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsR").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorsR").html(data);
  				},

  				error: function(){
  					$("#errorsR").html("Error en el envío de datos al server");
  				}

  			});

  		}
	});

	$("#loginBtn").click(function(){

		msg = "";

		if($("#usuarioL").val() == ""){
			msg += "El campo usuario está vacío <br>";
			$("#usuarioL").addClass("error-validation");
		} else {
			$("#usuarioL").removeClass("error-validation");
		}
		if($("#contraL").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraL").addClass("error-validation");
		} else {
			$("#contraL").removeClass("error-validation");
		}

  		$("#errorsL").html(msg);

  		if(msg == ""){

  			$.ajax({

  				type: 'post',
  				url: '/m2/home/login',
  				data: $("#login").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsL").html("Enviando datos...");
  				},

  				success: function(data){

  					$("#errorsL").html(data);

  				},

  				error: function(){
  					$("#errorsL").html("Error en el envío de datos al server");
  				}

  			});
  			
  		}
	});

});