<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>



<div id="formulario">
			<h1>Enviar un mensaje</h1>
			<form>
				<div>
					<input type="text" placeholder="Nombre y apellidos *" class="inputs" required="">
					<input type="email" placeholder="Correo electrónico *" class="inputs" required="">
					<input type="text" placeholder="Teléfono *" class="inputs" required="">
					<input type="text" placeholder="Asunto *" class="inputs" required="">
				</div>
				<textarea placeholder="Mensaje *"></textarea>
				<input type="checkbox" required="">
				<p>He leído y acepto los <b>términos y condiciones</b></p>
				<input type="submit">
			</form>
</div>