<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class accede extends Model {
	public function reg($user,$pass,$email)
	{


		$id = null;
		$connect = Model::getInstanceDB();
		$sql = "INSERT into usuarios (`id`,`usuario`,`password`,`email`)values (:id, :usuario, :psw, :mail);";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':usuario', $user);
		$stmt->bindParam(':psw', $pass);
		$stmt->bindParam(':mail', $email);				

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Fallo en la inserción del dato en la DB';

		} else {

			return 'Dato insertado correctamente';

		}

	}

	public function log($user,$pass)
	{


		// $id = null;
		$connect = Model::getInstanceDB();
		// $sql = 'select * from usuarios where :dato=$user and :dato2=$pass;';
		$sql = "SELECT * from usuarios WHERE usuario = :usuario and password=:psw;";
		$stmt = $connect->prepare($sql);
		// $stmt->bindParam(':id', $id);
		$stmt->bindParam(':usuario', $user);
		$stmt->bindParam(':psw', $pass);		

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK

		


		$stmt->execute();
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);

		if(count($rows)>0)
		{
			//Para el inicio de sesión $_SESSION
			$_SESSION['usuario']= [$rows["id"], $rows["usuario"]];
			return 'Bienvenid@'.'<br>'.$user;
			
		}
		else 
		{
			return 'Fallo en el login';
		}

	}	

}