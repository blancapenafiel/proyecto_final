<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<div id="formulario">
			<h2>Añadir una nueva categoría</h2>
			<form method="post" id="category">
				<div>
					<input type="text" placeholder="Añadir nueva categoría" class="inputs" required="">
					<input type='file' name="imagen" id="imagen" size="30" placeholder="Agregar imagen *" class="inputs" required=""/>
				</div>
				
				<input type="submit">
			</form>
</div>