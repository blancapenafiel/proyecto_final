<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class homeController extends Controller {

    public function index() {


    	require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');

    	$a = new home;
			
		$cat = $a->imprimir_Cat();

		$d['nom_cat'] = $cat;

        $this->set($d);





        // relatos
        // $b = new home;
            
        // $relatos = $b->ver_relatos();


        // $s['stories'] = $relatos;
        // var_dump($d);
        // $this->set($s);
        



        $this->render('index');

    }
    public function allcategory() {


    	require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');

    	$a = new home;
			
		$cat = $a->imprimir_Cat();

		$d['nom_cat'] = $cat;

        $this->set($d);

        $this->render('index');

    }

    public function allrelatos() {


        require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');

        $b = new home;
            
        $relatos = $b->ver_relatos();


        $s['stories'] = $relatos;
        // var_dump($d);
        $this->set($s);
        

        $this->render('index');

    }
   
}
