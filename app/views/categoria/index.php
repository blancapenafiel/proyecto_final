<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<div id="formulario">
			<h2>Añadir una nueva categoría</h2>
			<form method="post" id="category">
				<div>
					<input type="text" name="categoria" id="categoria" placeholder="Añadir nueva categoría" class="inputs">
					
				</div>
				
				<input type="button" name="add_category" value="Añadir categoría" id="cat_button">
				<div id="errorC"></div>
			</form>
</div>