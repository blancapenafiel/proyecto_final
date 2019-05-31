<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<a href="<?php echo BASE_DIR_URL?>home/index"><img src="webroot/img/blanco.png" class="logo"></a>
<nav class="nav"> 
    <ul class="nav-list">
        <li><a href="<?php echo BASE_DIR_URL?>home/index">Home</a></li>
        <li><a href="<?php echo BASE_DIR_URL?>categoria/index">Crear</a></li>
        <!--  <li><a href="<?php ?>perfil/index">Mi perfil </a></li> -->
         <li><a href="<?php echo BASE_DIR_URL?>sesion/index">Bievenid@ <?php echo $_SESSION['usuario'][1]?></a></li>
         <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Contacto</a></li>
         <li><a href="<?php echo BASE_DIR_URL?>accede/cerrar">Salir</a></li>
    
       

    </ul>
</nav>
