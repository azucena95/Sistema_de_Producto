<?php include './coneccion.php';?>
<?php 
	$sql = "SELECT * FROM producto WHERE id_producto ='".$_REQUEST['id_producto']."';";
	$datoss=consultaD($con,$sql,3);
	?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
		<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
		<script src="./libs/jquery-2.1.0.js"></script>
		<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="./libs/validacion/jquery.validate.min.js"></script>
		<script src="./libs/validacion/messages.js"></script>
		<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	</head>
	<body>
	<div class="jumbotron">
		<form action="modificarProducto.php" method="post" id="producto">
			<table class="table-bordered">
			<div class="row">
			<div class="col-xs-2">
			nombre del producto:
			</div>
			<div class="col-xs-2">
				<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
				<input type="text" name="nombre" value='<?php print $datos[0][1] ?>' class="required digits form-control">
			</div>
		</div>
	<div class="row">
		<div class="col-xs-2">
			codigo de producto:
		</div>
		<div class="col-xs-2">
			<input type="text" name="codigo" value='<?php print $datos[0][2]?>' class="required form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			categoria:
		</div>
		<div class="col-xs-2">
			<input type="text" name="categoria" value='<?php print $datos[0][3]?>' class="required form-control">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-2">
			precio:
		</div>
		<div class="col-xs-2">
			<input type="text" name="precio" value='<?php print $datos[0][4]?>' class="required form-control">
		</div>
	</div>
	
	</select>
		</div>
	</div>
	<div class="row">
	<td colspan="2">
	<input type="submit" name="bot" value="enviar" class="btn btn-prymary">
		</div>

	</table>
	</form>
	</div>
</body>
</html>
