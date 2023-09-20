<?php 
class Vehiculos_model{
	private $db;
	private $vehiculos;
	
	public function __construct(){
		$this->db = Connection::connection();
		$this->vehiculos = array();
	}

	public function get_vehiculos(){
		$sql = "select * from vehiculos";
		$resultados = $this->db->query($sql);
		while($row = $resultados->fetch_assoc()){
			$this->vehiculos[] = $row;
		}
		return $this->vehiculos;
	}

	public function nuevo($placa, $modelo, $marca, $anio, $color){
		$sql = "insert into vehiculos(placa, modelo,marca, anio, color) values ('$placa', '$modelo', '$marca', '$anio', '$color')";
		$resultado = $this->db->query($sql);	
	}

	public function eliminar($id){
		$sql = "delete from vehiculos where id=".$id;
		$resultado = $this->db->query($sql);	
	}
}
