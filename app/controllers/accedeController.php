<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class accedeController extends Controller {

    public function index() {

        $this->render('index');

    }
    public function registro(){

		if (isset($_POST['usuarioR']))
		{
			$user = ($_POST['usuarioR']);
			$pass = ($_POST['contraR']);			
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'aacedeModel.php');

			$a = new accede;
			//instanciar new model  $a = new home;
			$mensaje = $a->reg($user,$pass);
			//llamar al metodo $mensaje = $a->reg($user,$pass)
			echo json_encode($mensaje);
		}
	}
	public function login(){

		if (isset($_POST['usuarioL']))
		{
			$user = ($_POST['usuarioL']);
			$pass = ($_POST['contraL']);			
			//recoger $_POST en variables

			require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'homeModel.php');
			
			$a = new accede;
			//instanciar new model  $a = new home;
			$mensaje = $a->log($user,$pass);
			//llamar al metodo $mensaje = $a->reg($user,$pass)
			echo json_encode($mensaje);
		}
	}	

}
