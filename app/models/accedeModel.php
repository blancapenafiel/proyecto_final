<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class accede extends Model {
	public function reg($user,$pass)
	{


		$id = null;
		$connect = Model::getInstanceDB();
		$sql = "INSERT into usuarios values (:id, :usuario, :psw);";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':usuario', $user);
		$stmt->bindParam(':psw', $pass);		

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
		$sql = "SELECT * from usuarios WHERE usuario = :usuario and psw=:psw;";
		$stmt = $connect->prepare($sql);
		// $stmt->bindParam(':id', $id);
		$stmt->bindParam(':usuario', $user);
		$stmt->bindParam(':psw', $pass);		

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK

		


		$stmt->execute();
		$rows = $stmt->rowCount();

		sleep(2);

		if($rows == 1)
		{
			return 'log correcto';
		}
		else 
		{
			return 'Fallo en el login';
		}

	}	

}