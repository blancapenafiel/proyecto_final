<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoriaController extends Controller {

    public function index() {

        $this->render('index');

    }
    public function anadir_cat(){

		if (isset($_POST['usuarioR']))
		{
			$user = ($_POST['usuarioR']);
			$pass = ($_POST['contraR']);
			$email = ($_POST['emailR']);			
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'categoriaModel.php');

			$a = new categoria;
			//instanciar new model  $a = new home;
			$mensaje = $a->anadir_cat($id,$category,$url_cat);
			//llamar al metodo $mensaje = $a->anadir_cat($id,$category,$url_cat);
			echo json_encode($mensaje);
		}
	}

}