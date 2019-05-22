<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoria extends Model {
	public function anadir_cat($id,$nombre,$url)
	{


		$id = null;
		$connect = Model::getInstanceDB();
		$sql = "INSERT into CATEGORIAS (`id`,`nombre_cat`,`url_cat`)values (:id, :categ, :url);";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':categ', $category);
		$stmt->bindParam(':url', $url_cat);
					

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Fallo en la inserción del dato en la DB';

		} else {

			return 'Dato insertado correctamente';

		}

	}

}