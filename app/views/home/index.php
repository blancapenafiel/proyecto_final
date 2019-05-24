<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


<div class="main-wrapper">

		
		<!-- Titulo -->
		<h1 class="main-title">Categorías <a href="http://diseñando.">DISEÑANDOSUEÑOS</a></h1>

		<div class="container">
			<!-- Inputs de las Categorias -->
			<input name="category-css" id="all" type="radio" checked>
			<input name="category-css" id="ficcion" type="radio">
			<input name="category-css" id="mascotas" type="radio">
			<input name="category-css" id="navidad" type="radio">
			<input name="category-css" id="halloween" type="radio">
			
			<!-- Categorias -->
			<ul class="list-category">
				<li><label for="all">Todas</label></li>
				<?php
					foreach ($nom_cat as $value) 
					{
						echo "<li><label for='".utf8_encode($value['nombre_cat'])."'>".utf8_encode($value['nombre_cat'])."</label></li>";
					}
				?>
			</ul>


			<!-- Lista de Imagenes -->
			<ul class="list-images clearfix">
				<li class="type-ficcion"><span>Ficción</span></li>
				<li class="type-mascotas"><span>Mascotas</span></li>
				<li class="type-halloween"><span>Halloween</span></li>
				<li class="type-halloween"><span>Halloween</span></li>
				<li class="type-ficcion"><span>Ficción</span></li>
				<li class="type-ficcion"><span>Ficción</span></li>
				<li class="type-halloween"><span>Halloween</span></li>
				<li class="type-mascotas"><span>Mascotas</span></li>
				<li class="type-navidad"><span>Navidad</span></li>
				<li class="type-navidad"><span>Navidad</span></li>
				<li class="type-navidad"><span>Navidad</span></li>
				<li class="type-mascotas"><span>Mascotas</span></li>
			</ul>
		</div>
	</div>