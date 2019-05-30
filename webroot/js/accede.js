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
	
	$("#registrar").click(function(){

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
  				url: '/proyecto_final/accede/login',
  				data: $("#login").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsL").html("Enviando datos...");
  				},

  				success: function(data){

  					$("#errorsL").html(data);

 // PARA GENERAR EL INICIO DE SESION
  					setTimeout(function(){ 

  						location.href = "perfil/index";

  					}, 2000);

  				},

  				error: function(){
  					$("#errorsL").html("Error en el envío de datos al server");
  				}

  			});
  			
  		}
	});

	//AÑADIR CATEGORÍA
	//validación
	// id del form
	$("#category span").click(function(){
		$("#errorC").html("");
	});

	//id submit añadir categoría
	$("#cat_button").click(function(){

		msg = "";

		if($("#categoria").val() == ""){
			msg += "Ingrese una categoria <br>";
			$("#categoria").addClass("error-validation");
		} else {
			$("#categoria").removeClass("error-validation");
		}
		
  		$("#errorC").html(msg);

  		if(msg == ""){
  			
  			$.ajax({

  				type: 'post',
  				url: '/proyecto_final/categoria/anadir_cat',
  				// id del form
  				data: $("#category").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorC").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorC").html(data);
  					setTimeout(function(){ 
  						location.reload();
  					}, 3000);
  					
  				},

  				error: function(){
  					$("#errorC").html("Error en el envío de datos al server");
  				}

  			});

  		}
	});

	//AÑADIR RELATO
	//validación
	//Id form

	$("#formInsert span").click(function(){
		$("#errorC").html("");
	});

	//id submit añadir relato
	$("#story_button").click(function(){

		msg = "";

		if($("#categoriasR").val() == ""){
			msg += "Elija una categoria <br>";
			$("#categoriasR").addClass("error-validation");
		} else {
			$("#categoriasR").removeClass("error-validation");
		}

		if($("#nameRelato").val() == ""){
			msg += "Ingrese el título <br>";
			$("#nameRelato").addClass("error-validation");
		} else {
			$("#nameRelato").removeClass("error-validation");
		}

		if($("#relato").val() == ""){
			msg += "Añada su relato <br>";
			$("#relato").addClass("error-validation");
		} else {
			$("#relato").removeClass("error-validation");
		}
		
  		$("#errorSubida").html(msg);

  		if(msg == ""){
  			document.getElemntById("formInsert").submit();
  			
  			// $.ajax({

  			// 	type: 'post',
  			// 	url: '/proyecto_final/categoria/anadir_relato',
  			// 	// id del form
  			// 	data: $("#formInsert").serialize(),
  			// 	dataType: 'json',

  			// 	beforeSend: function(){
  			// 		$("#errorSubida").html("Enviando datos...");
  			// 	},

  			// 	success: function(data){
  			// 		$("#errorSubida").html(data);
  			// 	},

  			// 	error: function(){
  			// 		$("#errorSubida").html("Error en el envío de datos al server");
  			// 	}

  			// });

  		}
	});

	function readURL(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#user-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#user-img-file').change(function(){
        readURL(this);
    });



});