<?php 
include './coneccion.php';?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <h1> REGISTRO DE VENTAS </h1>
    <title> Registro de Venta </title>
    <link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <SCRIPT type="text/javascript" src="jquery.js"></script>
  </head>
  <script type="text/javascript">
  function multiplicar(){
    cantidad=document.getElementById('resultado').value;
    precio =document.getElementById('precio').value;
     total=precio*cantidad;
    document.getElementById('salu').innerHTML="<label>El total de la venta es "+ total+" </label>"; 
   



  }
 function cargarproducto(id){
 
  
    $("#municipios").load('cargarProducto.php?id='+id);
  }
  </script>
  
  <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function soloNumeros(e){
  var key = window.Event ? e.which : e.keyCode
  return (key >= 46 && key <= 57 )
}

function SoloNumerosDecimales3(e, valInicial, nEntero, nDecimal) {
    var obj = e.srcElement || e.target;
    var tecla_codigo = (document.all) ? e.keyCode : e.which;
    var tecla_valor = String.fromCharCode(tecla_codigo);
    var patron2 = /[\d.]/;
    var control = (tecla_codigo === 46 && (/[.]/).test(obj.value)) ? false : true;
    var existePto = (/[.]/).test(obj.value);

    //el tab
    if (tecla_codigo === 8)
        return true;

    if (valInicial !== obj.value) {
        var TControl = obj.value.length;
        if (existePto === false && tecla_codigo !== 46) {
            if (TControl === nEntero) {
                obj.value = obj.value + ".";
            }
        }

        if (existePto === true) {
            var subVal = obj.value.substring(obj.value.indexOf(".") + 1, obj.value.length);

            if (subVal.length > 1) {
                return false;
            }
        }
 
        return patron2.test(tecla_valor) && control;
    }
    else {
        if (valInicial === obj.value) {
            obj.value = '';
        }
        return patron2.test(tecla_valor) && control;
    }
}
</script>
  <body>
  <div class="jumbotron">

    <form action="manejadorVenta.php?accion=save" method="post" id="ventas">
      <table class="table-bordered">
      <div class="row">
      <div class="col-xs-2">
       
      </div>
      </div>
      <div class="row">
      <div class="col-xs-2">
          Iingrese Codigo:
      </div>
      <div class="col-xs-2">
          <input type="text" name="nombre"   id="hola" class="required form-control"  onKeyPress="return soloNumeros(event)"  required>
      </div>
      </div>
    
      <div class="row">
      
      <div class="col-xs-2">
      <output id="municipios" ></output>
      <input type="button" value="buscar" onclick="cargarproducto(getElementById('hola').value);">
      <output id="salu" ></output>
        </div>
        <div class="row">
        <td colspan="2"> 
<input type="hidden" name="fecha" value="<?php echo date("Y"."/"."m"."/"."d"); ?>">
        <input type="submit" name="bot" value="enviar" class="btn btn-primary">
        </div>
        </div>

    </table>
    </form>
    </div>
  </body>
</html>