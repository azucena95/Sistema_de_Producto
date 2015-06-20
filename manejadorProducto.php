<?php
include './coneccion.php';
include './controladorProducto.php';
     

$productos = new controladorProducto();
$accion=$_REQUEST['accion'];


echo $accion;
switch ($accion) {
	case 'save':
 		if(isset($_REQUEST['bot'])){
 				$productos->setId('NULL');
 				$productos->setnombre($_REQUEST['nombre']);
 				$productos->setcategoria($_REQUEST['categoria']);
 				$productos->setprecio($_REQUEST['precio']);
 				$productos->setcodigo($_REQUEST['codigo']);
 			
 				
 				
	$datosObj=array($productos->getId(),
 					$productos->getnombre(),
 					$productos->getcategoria(),
 					$productos->getprecio(),
 					$productos->getcodigo()
 					
 					
 					);

        print $productos->guardarDatos($con,$datosObj);

		print '<a href=\'manejadorProducto.php?accion=con\'>Verdatos</a>';
		}else{
				print'no se han enviado datos';
				}
		break;
		case 'con':
		$sql = 'SELECT * FROM producto';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss,"producto","table table-bordered",1);
		break;
	

}
	

?>
</body>
</html>