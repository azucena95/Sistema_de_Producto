<?php
include './coneccion.php';
include './controladorventa.php';
     

$ventas = new controladorventa();

@$cantidad=$_REQUEST['cantidad'];
@$precio=$_REQUEST['precio'];
@$total=$cantidad*$precio;
$accion=$_REQUEST['accion'];


echo $accion;
switch ($accion) {
	case 'save':
 		if(isset($_REQUEST['bot'])){
 				$ventas->setId('NULL');
 				$ventas->setnombre($_REQUEST['nombre']);
 				$ventas->setcantidad($_REQUEST['cantidad']);
 				$ventas->setprecio($_REQUEST['precio']);
 				$ventas->setfecha($_REQUEST['fecha']);
 				$ventas->settotal($total);
 				
 				
	$datosObj=array($ventas->getId(),
 					$ventas->getnombre(),
 					$ventas->getcantidad(),
 					$ventas->getprecio(),
 					$ventas->gettotal(),
 					$ventas->getFecha()
 					
 					);

   

        print $ventas->guardarDatos($con,$datosObj);

		print '<a href=\'manejadorVenta.php?accion=con\'>Verdatos</a>';
		}else{
				print'no se han enviado datos';
				}
		break;
		case 'con':
		$sql = 'SELECT * FROM ventas ORDER BY cantidad DESC';
		$datoss= consultaD($con,$sql);
		print imprimetabla1($datoss,"ventas","table table-bordered",1);
		break;
	

}
	

?>
</body>
</html>