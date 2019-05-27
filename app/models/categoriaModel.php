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

	public function anadir_relato($nom_relato,$descripcion,$url_relato,$user_id,$id_cat)
	{


		$id = null;
		$connect = Model::getInstanceDB();
		$sql = "INSERT into RELATOS (`id_relatos`,`nombre`,`descripcion`,`url_relato`,`USUARIOS_id`,`CATEGORIAS_id`)values (:id_R, :titulo, :descrip, :url, :id_user,:id_cat);";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id_R', $id_R);
		$stmt->bindParam(':titulo', $nombre);
		$stmt->bindParam(':descrip', $id);
		$stmt->bindParam(':url', $url);
		$stmt->bindParam(':id_user', $id_user);
		$stmt->bindParam(':id_cat', $id_cat);
		
					

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Fallo en la inserción del dato en la DB';

		} else {

			return 'Dato insertado correctamente';

		}

	}

}