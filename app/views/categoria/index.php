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
		<form  id="formInsert" method="post" enctype='multipart/form-data' action="/proyecto_final/categoria/anadir_relato">
            <h2>Añadir un relato</h2>  
            <label class="catF">Elige una categoría</label>
            <select id="categoriasR" name="categoriasR">
            	<?php
					foreach ($nom_cat as $value) 
					{
						echo "<option value='".utf8_encode($value['id'])."'>".utf8_encode($value['nombre_cat'])."</option>";;
					}

				?>
            	
            	
            </select>
            <input type="text" name="nombre" id="nameRelato" placeholder="Título de mi historia"></input><br> 
            <div class="img-box">
				<img src="" id="user-img">
				<input class="none" type="file" id="user-img-file" name="user-img-file">
				<label for="user-img-file" class="center">
					Click aquí para subir imagen (2MB máx).
				</label>
			</div>
            <textarea name="relato" id="relato" placeholder="Érase una vez..."></textarea><br>
            <input type="submit" value="Insertar" name="insertar" id="story_button">
        </form>
        <div id="errorSubida"></div>
	</div>
</div>

v