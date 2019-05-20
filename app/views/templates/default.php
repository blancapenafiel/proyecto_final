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
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
        <link rel="stylesheet" href="webroot/css/accede.css">
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
        <script type="text/javascript" src="webroot/js/accede.js"></script>
    </head>
        <header class="demo-header"> 
            <?php 
                if(isset($_SESSION['usuario'])){

                    require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'headerLOG.php');
    

                } else{

                    require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'header.php');

                }


            ?>
            
        </header>
        <body>
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        </body>
        <footer>

            <p><?php echo date("Y");?> © Blanca Peñafiel |Diseñando sueños</p>
            
        </footer>
    
</html>