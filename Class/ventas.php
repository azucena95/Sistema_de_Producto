<?php
class ventas{
	
	private $Id;
	private $nombre;
	private $cantidad;
	private $precio;
	private $fecha;
	private $total;




public function setfecha($fecha){
$this->fecha=$fecha;
}	
public function getFecha(){
	return $this->fecha;
}
public function settotal($total){
	$this->total=$total;
}
public function gettotal(){
	return $this->total;
}

public function setId($Id) {
	$this->Id = $Id;
}
public function getId() {
	return $this->Id;
}
public function setnombre($nombre) {
	$this->nombre = $nombre;
}

public function getnombre() {
	return $this->nombre;	
}
public function setcantidad($cantidad) {
	 $this->cantidad=$cantidad;
}
public function getcantidad() {
	 return $this->cantidad;

}
public function setprecio($precio) {
	$this->precio= $precio;
}
public function getprecio() {
	return $this->precio;
}
}

?>