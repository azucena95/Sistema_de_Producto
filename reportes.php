<!DOCTYPE html>
<html lang="es">    
 
     <head>
         

          <hr>
          <body align="center">
<body style="background:silver">

              
               <br>
<br>
<form action="ventamanejador.php?accion=save" method="post">  

PRODUCTOS REGISTRADOS
<meta charset = "utf-8"> 

</head>
<br>
<br>

          </tr>
<br>
<br>
nombre:  <input type="text" name="nombre" maxlength="25" onkeypress="return soloLetras(event)">
<br>
<br>

categoria: <select name="categoria"> 
<option value="bebida energizantes">bebida energizantes</option> 
<option value="bebida naturales">bebida naturales</option>
<option value="bebida alcohilicas">bebida alcoholicas</option>
<option value="bebida carbonatadas">bebida carbonatadas</option>

  
</select>
<br>
<br>
precio:  <input type="text" name="precio" maxlength="25" onKeyPress="return soloNumeros(event)>
<br>
<br>
codigo:  <input type="text" name="codigo" maxlength="25" onKeyPress="return soloNumeros(event)>
<br>
<br>

<input type="submit" name="hola" value="guardar producto" />
 <br><br>
<hr/>
</form> 