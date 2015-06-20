<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
include './coneccion.php';
include './controladorProducto.php';
$sql= "DELETE FROM producto WHERE id_producto=".$_REQUEST['id'].";";


print consultaA($con,$sql);

print '<a href=\'manejadorProducto.php?accion=con\'>Ver datos</a>';

 ?>
 <script>
 $(document).ready(function(){
 	$("#dialogo").dialog();
 });
 </script>

</body>
</html>