<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoriaController extends Controller {

    public function index() {

        require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');

    	$a = new home;
			
		$cat = $a->imprimir_Cat();

		$d['nom_cat'] = $cat;

        $this->set($d);

        $this->render('index');

    }
    public function anadir_cat(){

		if (isset($_POST['categoria']))
		{
			$category = $_POST['categoria'];
			
						
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'categoriaModel.php');

			$a = new categoria;
			//instanciar new model  $a = anadir_cat;
			$mensaje = $a->anadir_cat($category);
			//llamar al metodo $mensaje = $a->anadir_cat($id,$category);
			echo json_encode($mensaje);
		}
	}

	public function anadir_relato(){

		if (isset($_POST['categoriasR']))
		{
			$cat_story = $_POST['categoriasR'];
			$nom_story = $_POST['nombre'];
			$story = $_POST['relato'];
			$url = $_POST['imagen'];
			
			
			
						
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'categoriaModel.php');

			$a = new categoria;
			//instanciar new model  $a = anadir_cat;
			$mensaje = $a->anadir_relato($cat_story, $nom_story, $story, $url);
			//llamar al metodo $mensaje = $a->anadir_relato($relato);
			echo json_encode($mensaje);
		}
	}

}