<?php 
require_once("config/config.php");
require_once("core/routes.php");
require_once("config/database.php");
require_once("models/VehiculosModel.php");
require_once("controllers/Vehiculos.php");

/*
$control = new VehiculosController();
$control->nuevo();
*/
if(isset($_GET['c'])){
	$controlador = cargarControlador($_GET['c']);
	if(isset($_GET['m'])){
		if(isset($_GET['id'])){
			cargarAccion($controlador, $_GET['m'],$_GET['id']);
		}else{
			cargarAccion($controlador, $_GET['m']);
		}
	}else{
		cargarAccion($controlador, Accion_Principal);
	}
}else{
	$controlador=cargarControlador(Controlador_Principal);
	//cargarAccion(Controlador_Principal,Accion_Principal);
	$acciontpm = Accion_Principal;
	$controlador->$acciontpm();
}


 ?>