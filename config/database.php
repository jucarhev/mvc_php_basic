<?php 
/**
 * 
 */
class Connection{
	public static function connection(){
		$conexion = mysqli_connect("localhost","root","password","mvc");
		return $conexion;
	}
}

 ?>