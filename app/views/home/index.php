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
	
		<div class="" id="mainContent">
			<?php
				$relatos = homeController::allrelatos();
			
				 foreach ($relatos as $value) 
					{

						echo "<div class='caja'><h1>".utf8_encode($value['nombre'])."</h1>";
						echo "<br><img class='url_img'src='".($value['url_relato'])."'>";	
						echo "<br><div> Descripcion".utf8_encode($value['descripcion'])."</div>";
						echo "</div><br>";
						
				 	}

			?>
		</div>
<!-- 		<a type="application/rss+xml" href="prueba.rss">
			<img src="rss.png">
		</a> -->
	
