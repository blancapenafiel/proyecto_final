<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class home extends Model {

	public function imprimir_Cat()
	{


		$connect = Model::getInstanceDB();
		$sql = "SELECT * from categorias;";
		$stmt = $connect->prepare($sql);
		$stmt->execute();
		$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $categorias;

	}

	public function ver_all()
	{

		$connect = Model::getInstanceDB();
		$sql = "SELECT * from categorias;";
		$stmt = $connect->prepare($sql);
		$stmt->execute();
		$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $categorias;

	}

	public function ver_relatos()
	{

		$connect = Model::getInstanceDB();
		$sql = "SELECT * from relatos;";
		$stmt = $connect->prepare($sql);
		$stmt->execute();
		$relatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $relatos;

	}
	

}
