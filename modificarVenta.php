<html>
	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<head>
	<body>
<?php
include './coneccion.php';
include './controladorProducto.php';
$productos = new controladorProducto();

if(isset($_REQUEST['bot'])){
		$productos->setId($_REQUEST['id']);
		$productos->setnombre($_REQUEST['nombre']);
		$productos->setcodigo($_REQUEST['codigo']);
		$productos->setcategoria($_REQUEST['categoria']);
		$productos->setprecio($_REQUEST['precio']);
		
		$datosObj=array($productos->getId(),
						$productos->getnombre(),
						$productos->getcodigo(),
						$productos->getcategoria(),
						$productos->getprecio());
						
							
			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $productos->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorProducto.php?accion=con\'>Ver datos</a>';
			print "</div>";
}
?>
<script >
	$(document).ready(function(){
		$("#dialogo").dialog();
	});
</script>
</body>
</html>