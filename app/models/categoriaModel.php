<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoria extends Model {
	public function anadir_cat($nombre)
	{


		$id = null;
		$connect = Model::getInstanceDB();
		$sql = "INSERT into CATEGORIAS (`id`,`nombre_cat`)values (:id, :categ);";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':categ', $nombre);
		
					

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Fallo en la inserción del dato en la DB';

		} else {

			return 'Dato insertado correctamente';

		}

	}

}