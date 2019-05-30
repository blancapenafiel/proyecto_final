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
		$user = $_SESSION['usuario'][0];

		if (isset($_POST['categoriasR']))
		{

			$cat_story = $_POST['categoriasR'];
			$nom_story = $_POST['nombre'];
			$story = $_POST['relato'];
			// $url = insertImage($_FILES[]$_POST['imagen'];
			$insertImg = insertImage($_FILES['user-img-file'], 'user-image', 2000000, 'user-img/img', $user);
						
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'categoriaModel.php');

			$a = new categoria;
			//instanciar new model  $a = anadir_cat;
			$mensaje = $a->anadir_relato($cat_story, $nom_story, $story, $insertImg[2], $user);
			
			header("location: proyecto_final/home/index");
		}
	}

}