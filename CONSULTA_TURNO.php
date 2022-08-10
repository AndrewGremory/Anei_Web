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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">
        <input type="text" id="bus" onkeyup="busqueda();"  placeholder="Buscar...">
        </div>

 


		<hr>
		<h2 class="text-center">SERVICIOS</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-15">
     <div id="mostrar_mensaje"></div>
    
   </div>
   </div>
</div>
    
			<!-- -----------------MODIFICAR --------------------------------->	
      <div class="modal fade" id="prosecadora">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content row-1 col-md-6">
    
      
      
            <!-- cabecera del diálogo -->
            <div class="modal-header">
              <h4 class="modal-title">PRODUCTOS A SECAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                        <div class="form-group row ">
                          CODIGO:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          CANTIDAD:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cantidad_secadora" name="cantidad_secadora" placeholder="0" min="0"><br>
                          </div>
                        </div>

                         <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="produ_secadora();">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                          </div> 
                         </div>
                        </form>
                   </div>            
               </div>
        

              
          </div>
        </div>
      </div>
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">
 
 $(document).ready(function () {
    $('#example').DataTable();
});
<!-- ----------------- CONTROL SECADORA--------------------------------->  
function busqueda()
    { 
    	buscar = document.getElementById('bus').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "accion" : "2"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_TURNO2.php',
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
<!-- ----------------- AGREGAR A LA SECADORA--------------------------------->  


    <!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
  
    
    var parametros = 
      {
        
        "accion":"1"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_TURNO2.php',
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
         
   
    
<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
