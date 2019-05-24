<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoriaController extends Controller {

    public function index() {

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

}