<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


<div class="main-wrapper">

		
		<!-- Titulo -->
		<h1 class="main-title">Categorías <a href="http://diseñando.">DISEÑANDOSUEÑOS</a></h1>

		<div class="container">
			
			<ul class="list-category">
				<li><label for="all">Todas</label></li>
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
				// game::getNews();
			?>
		</div>
		<a type="application/rss+xml" href="prueba.rss">
			<img src="rss.png">
		</a>
		</div>	