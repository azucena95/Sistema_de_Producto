<?php
include './Class/ventas.php';
class controladorventa extends ventas{
	public function guardarDatos($con,$objventas) {
		$variableSql = "INSERT INTO  ventas "; 
		$variableSql .= "(id_venta,nombre,cantidad,precio,precio_total,fecha_venta)";
		$variableSql .= "VALUES(";

		$variableSql .= "'".$objventas[0]."',";
		$variableSql .= "'".$objventas[1]."',";
		$variableSql .= "'".$objventas[2]."',";
		$variableSql .= "'".$objventas[3]."',";
		$variableSql .= "'".$objventas[4]."',";
		$variableSql .= "'".$objventas[5]."');";
		
		
	
//var_dump($variableSql);
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objventas){
		$variableSql = "UPDATE ventas SET ";
		$variableSql .="nombre = '".$objventas[1]."'";
		$variableSql .=" ,cantidad = '".$objventas[2]."'";
		$variableSql .=" ,precio = '".$objventas[3]."'";
		$variableSql .= " WHERE id_ventas = ".$objventas[0].";";
		return consultaA($con,$variableSql);

		}
}
?>