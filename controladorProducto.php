<?php
include './Class/productos.php';
class controladorProducto extends productos{
	public function guardarDatos($con,$objproductos) {
		$variableSql = "INSERT INTO  producto "; 
		$variableSql .= "(id_producto,nombre,categoria,precio,Codigo_producto)";
		$variableSql .= "VALUES(";
		$variableSql .= "'".$objproductos[0]."',";
		$variableSql .= "'".$objproductos[1]."',";
		$variableSql .= "'".$objproductos[2]."',";
		$variableSql .= "'".$objproductos[3]."',";
		$variableSql .= "'".$objproductos[4]."');";
		
		
	
var_dump($variableSql);
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objproductos){
		$variableSql = "UPDATE producto SET ";
		$variableSql .="nombre = '".$objproductos[1]."'";
		$variableSql .=" ,categoria = '".$objproductos[2]."'";
		$variableSql .=" ,precio = '".$objproductos[3]."'";
		$variableSql .=" ,Codigo_producto = '".$objproductos[4]."'";
		$variableSql .= " WHERE id_producto = ".$objproductos[0].";";
		return consultaA($con,$variableSql);

		}
}
?>
