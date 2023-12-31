<?php 

function cargarControlador($controlador){
	$nombreControlador = $controlador."Controller";
	$archivoControlador = 'controllers/'.ucwords($controlador).".php";
	if(!is_file($archivoControlador)){
		$archivoControlador = 'controllers/'.Controlador_Principal.'.php';
	}
	require_once $archivoControlador;
	$control = new $nombreControlador();
	return $control;
}

function cargarAccion($controller, $accion,$id=null){
	if(isset($accion) && method_exists($controller, $accion)){
		if($id==null){
			$controller->$accion();
		}else{
			$controller->$accion($id);
		}
	}else{
		$controller->Accion_Principal();
	}
}

 ?>