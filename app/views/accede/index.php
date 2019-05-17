<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<!-- 
	LOGIN -->
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Accede</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Regístrate</label>
		
		<div class="login-form">
			<form action="home/login" method="post" id="login">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Usuario</label>
						<input id="usuarioL" type="text" class="input" name="usuarioL">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="contraL" name="contraL" type="password" class="input" data-type="password">
					</div>
				<!-- <div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> -->
					<div class="group">
						<input type="button" id="loginBtn" class="button" value="Ingresa">
					</div>
					<div class="group">
						<input type="reset"  class="button" value="Borrar" id="borrar1">
					</div>
					<div id="errorsL"></div>
				</div>
			</form>
				<!-- <div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div> -->
		
	

			<!-- REGISTRO -->
			
			
				
			<div class="sign-up-htm">	
				<form method="post" id="registro">
				<div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="usuarioR" name="usuarioR"  type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="contraR" name="contraR"  type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repita Password</label>
					<input id="contraRR" name="contraRR" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email </label>
					<input id="email" name="email" type="email" class="input">
				</div>
				<div class="group">
					<input type="button" id="registrar"  class="button" value="Registrarse">
				</div>
				<div class="group">
					<input type="reset"  class="button" value="Borrar" id="borrar">
				<div class="clearfix"></div>
				</div>
				<div id="errorsR"></div>
				</form>

				<!-- <div class="hr"></div> -->
				<div class="foot-lnk">
					<label for="tab-1">Estás registrado?</a>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
