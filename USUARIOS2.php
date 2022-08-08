<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>


</head>
<body>
<form> 
                         <div class="form-group row ">
                          Nombre Completo:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cedula:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cedula_usuario" name="cedula_usuario" min="0"><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Contacto:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="contacto" name="contacto" ><br>
                          </div>
                        </div>

                        Tipo de Vinculacion:
                        <select name="tipo_vinculacion" id="tipo_vinculacion">
                            <option>seleccione</option>
                            <option value="asociado"> Asociado </option>
                            <option value="no asociado">No Asociado</option>
                        </select> <br> <br> 

                        
                        <div class="form-group row ">
                          Nº UP:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="numero_up" name="numero_up" min="0"><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Codigo UP:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_up" name="codigo_up" ><br>
                          </div>
                        </div>
                          
                        <div class="form-group row ">
                          Municipio:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="municipio" name="municipio" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Vereda:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="vereda" name="vereda" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Finca:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="finca" name="finca" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Estatus:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="estatus" name="estatus" ><br>
                          </div>                        
                        </div>

                        <div class="form-group row ">
                          Cupo_cbs:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cupo_bcs" name="cupo_bcs" min="0"><br>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="usuario();">Guardar</button>
                            
                          </div> 
                        </div>
                        </form>
                        <div class="text-center">
                         <div id="mostrar_mensaje"></div>
                         </div>
      <!-- ----------------- AGREGAR CHIVO --------------------------------->

   
</body>
</html>
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
<script type="text/javascript">




  <!-- ----------------- NUEVA FACTURA--------------------------------->  
  function nuevafactura()
  { 
    
      var parametros = 
      {
        "cedula" : $("#cedu").val(),
        "accion":"1"
      };
      var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) 
    {
       
	
      $.ajax({
        data: parametros,
        url: 'AGREGAR_MEJORADO2.php',
        type: 'POST',
        
        beforesend: function()
        { 
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
          
        }
      });
      return false;
    }
  }  
 
<!-- ----------------- NUEVA FACTURA--------------------------------->
<!-- ----------------- AGREGAR CERDO--------------------------------->  
function comprar(codigo)
    { 
   
    	
      cod=codigo;
      

      var parametros = 
      {
       
        "codigo" : cod,
        "accion" : "2"
      };

      $.ajax({
        data: parametros,
        url: 'AGREGAR_MEJORADO2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
<!-- ----------------- AGREGAR CERDO--------------------------------->
<!-- ----------------- AGREGAR CHIVO--------------------------------->  
  function chivo()
    { 
    
      var parametros = 
      {
        "precio" : $("#precio2").val(),
        "producto" : $("#producto2").val(),
        "cantidad" : $("#cantidad2").val(),
        "accion":"2"
      };

      $.ajax({
        data: parametros,
        url: 'AGREGAR_MEJORADO2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
      return false;
    }
 
<!-- ----------------- AGREGAR CHIVO--------------------------------->

 
<!-- ----------------- CONSULTA --------------------------------->     	

      var parametros = 
      {
        "accion" : "200"
      };

      $.ajax({
        data: parametros,
        url: 'AGREGAR_MEJORADO2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
          
        }
        });

        
              
       
<!-- ----------------- CONSULTA --------------------------------->    
<!-- ----------------- BUSQUEDA--------------------------------->  

	function mi_busqueda()
    { 
    	buscar = document.getElementById('cuadro_buscar').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "accion" : "4"
      };

      $.ajax({
        data: parametros,
        url: 'AGREGAR_MEJORADO2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
<!-- ----------------- BUSQUEDA --------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
