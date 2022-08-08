<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>                        
<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">    

                        <input type="text" id="cuadro_buscar" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

                            $registros = mysqli_query($conexion, "select  *from secado") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($reg = mysqli_fetch_array($registros)) 
                            {
                        ?>
        
                        <option label="<?php echo $reg['cedula_secado']?>" value="<?php echo $reg['codigo_secado']?>" >
                        <?php } ?>
                        </datalist>                 
        </div>
                        
                        <hr>
		                
                        <div class="row justify-content-md-center">		
                          <div class="col-md-2">
                            <div id="mostrar_mensaje"></div>
                          </div>
                        </div>
                       
</div>

                       
 </body>
 </html>

    <script type="text/javascript">
<!-- ----------------- ANALISIS SENSORIAL---------------------------------> 
function resultado_secado()
    { 
    
      var parametros = 
      {
        "codigo_resultado" : $("#codigo_resultado").val(),
        "cantidad_resultado" : $("#cantidad_resultado").val(),
        "costo_resultado" : $("#costo_resultado").val(),
        "costo_total_resultado" : $("#costo_total_resultado").val(),
        "tiposecado_resultado" : $("#tiposecado_resultado").val(),
        "observaciones_resultado" : $("#observaciones_resultado").val(),
        "tipo_pago" : $("#tipo_pago").val(),
       
        "accion":"7"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI2.php',
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

    <!-- ----------------- BUSQUEDA--------------------------------->  

function mi_busqueda()
{ 
    buscar = document.getElementById('cuadro_buscar').value;
 
  var parametros = 
  {
    "mi_busqueda" : buscar,
    
    "accion" : "15"
  };

  $.ajax({
    data: parametros,
    url: 'ANEI2.php',
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
    </script>