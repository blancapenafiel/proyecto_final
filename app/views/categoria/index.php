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

<!-- AÑADIR RELATOS -->
	<div id="insertar" class="row">
		<form  id="formInsert" method="post" enctype='multipart/form-data'>
            <h2>Añadir un relato</h2>  
            <select id="categoriasR" name="categoriasR">
            	<?php
					foreach ($nom_cat as $value) 
					{
						echo "<option value='".utf8_encode($value['nombre_cat'])."'>".utf8_encode($value['nombre_cat'])."</option>";;
					}
				?>
            	
            	
            </select>
            <input type="text" name="nombre" id="nameRelato" placeholder="Título de mi historia"></input><br> 
            <textarea name="relato" id="relato" placeholder="Érase una vez..."></textarea><br>
            <label for="imagen" id="lArchivo">Subir imagen</label>
            <input type="file" id="imagen" name="imagen" onchange="readURL(this);" ></input><br>
            <img id="blah" src="#" alt="fondo del relato" /><br>
            <input type="button" value="Insertar" name="insertar" id="story_button">
        </form>
        <div id="errorSubida"></div>
	</div>
</div>