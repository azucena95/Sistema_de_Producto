<?php
 include 'coneccion.php';
 if ($_GET["id"]!="") {
 	//print '<select name="Municipio" size="1"   >';
			//		print"<option value=";
			//			print">";
			//			print "</option>";
		
					$sql='SELECT id_producto,nombre,categoria,precio,Codigo_producto FROM producto where Codigo_producto='.$_GET["id"] ;
					$datos=consultaD($con,$sql);
					foreach ($datos as $value) {

						//print "<option value='";
						//print $value['id_producto'];
						//print"'>";
						//print utf8_encode($value['nombre']);
						//print"</option>";
					}
					
			//	print "</select>";
			///	print"</div>";

				echo "<label>Nombre</label><input class=\"required form-control\" name='nombre' type='text' value='".$value['nombre']."'>";

		
      echo "<label>Precio</label><input name='precio'  id=\"precio\" class=\"required form-control\" onKeyPress=\"return SoloNumerosDecimales3(event, '0.0', 4, 2);\" required type='text' value='".$value['precio']."'>";
      
				
 echo "<label> Cantidad</label><input type=\"text\" onkeyup=\"multiplicar()\" name=\"cantidad\" id=\"resultado\" class=\"required form-control\" onKeyPress=\"return soloNumeros(event)\" required>
";

 }else{
 	 echo "<script type=\"text/javascript\">alert(\"Por favor ingrese un codigo\");</script>";
 }
			
?>