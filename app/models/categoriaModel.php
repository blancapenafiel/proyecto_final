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

	public function anadir_relato($categoria, $nom_relato, $descripcion,$file, $user)
	{
		$connect = Model::getInstanceDB();
		$sql = "INSERT into RELATOS (`nombre`,`descripcion`,`url_relato`, `USUARIOS_id`, `CATEGORIAS_id`)values (:titulo, :descrip, :file, :user, :cat );";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':titulo', $nom_relato);
		$stmt->bindParam(':descrip', $descripcion);
		$stmt->bindParam(':file', $file);
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':cat', $categoria);
		
		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Nose realizó en la inserción del dato en la DB';

		} else {

			return 'Dato insertado correctamente';

		}

	}

}