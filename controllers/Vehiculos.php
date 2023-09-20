<?php

class VehiculosController{
	public function index(){
		require_once("models/VehiculosModel.php");
		$vehiculos = new Vehiculos_model();
		$data['Titulo'] = "Vehiculo";
		$data["vehiculos"] =$vehiculos->get_vehiculos();

		require_once("views/vehiculos/vehiculos.php");
	}
	
	public function nuevo(){
		$data['titulo']="nuevo";
		require_once "views/vehiculos/nuevo.php";
	}

	public function guardar(){
		$placa = $_POST['placa'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$anio = $_POST['anio'];
		$color = $_POST['color'];

		$vehiculos = new Vehiculos_model();
		$vehiculos->nuevo($placa, $modelo, $marca, $anio, $color);

		$this->index();
	}

	public function eliminar($id){
		$vehiculos = new Vehiculos_model();
		$vehiculos->eliminar($id);
		$this->index();
		header('Location: index.php');
		exit;
	}
}