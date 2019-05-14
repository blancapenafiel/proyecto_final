<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Diseñando Sueños</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_DOMAIN_DIR_URL?>">
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Kalam|Permanent+Marker" rel="stylesheet">
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
    </head>
    <body>
        <header class="demo-header"> 
            <img src="webroot/img/blanco.png" class="logo">
            <nav class="nav"> 
                <ul class="nav-list">
                    <li><a href="<?php echo BASE_DIR_URL?>home/index">Home</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>home/index">Acerca de</a>
                        <ul class="sub-menu">
                            <li><a href="#">Portfolio 1</a></li>
                            <li><a href="#">Portfolio 2</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Contacto</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Accede</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Regístrate</a></li>

                </ul>
            </nav>
        </header>
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        <footer>

            <p><?php echo date("Y");?> © Blanca Peñafiel |Diseñando sueños</p>
            
        </footer>
    </body>
</html>