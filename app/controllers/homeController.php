<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class homeController extends Controller {

    public function index() {


    	require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');

    	$a = new home;
			
		$cat = $a->imprimir_Cat();

		$d['nom_cat'] = $cat;

        $this->set($d);

        $this->render('index');

    }
   
}
