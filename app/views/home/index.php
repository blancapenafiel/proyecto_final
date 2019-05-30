<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


<div class="main-wrapper">

		
		<!-- Titulo -->
		<h1 class="main-title">Categorías <a href="http://diseñando.">DISEÑANDOSUEÑOS</a></h1>

		<div class="container">
			
			<ul class="list-category">
				
				<?php
					foreach ($nom_cat as $value) 
					{
						echo "<li><label for='".utf8_encode($value['nombre_cat'])."'>".utf8_encode($value['nombre_cat'])."</label></li>";
					}
				?>
			</ul>

		</div>
	</div>
	<div class="contenedor">
	<div class="row" id="mainContent">
			<?php
			
				 foreach ($stories as $value) 
					{
					var_dump($stories);
							// var_dump($stories['nombre']);	
				// echo "<div".utf8_encode($value[]['nombre'])."</div>";
				 	}
			?>
		</div>
		<a type="application/rss+xml" href="prueba.rss">
			<img src="rss.png">
		</a>
		</div>	
