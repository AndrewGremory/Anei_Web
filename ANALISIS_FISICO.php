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

                            $regi = mysqli_query($conexion, "select  *from asociados join compra on cedula=cedula_usuario") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($consu = mysqli_fetch_array($regi)) 
                            {
                           
                        ?>
        
                        <option label="<?php echo $consu['nombre_usuario'].' '. $consu['cedula_usuario']?>"   value="<?php echo $consu['marca']?>" >
                        
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

    function analisisfisico()
    { 
    
      var parametros = 
      {
        "codigo_analisisfisico" : $("#codigo_analisisfisico").val(),
        "almendra_total" : $("#almendra_total").val(),
        "almendra_total1" : $("#almendra_total1").val(),
        "almendra_sana" : $("#almendra_sana").val(),
        "almendra_sana1" : $("#almendra_sana1").val(),
        "broca" : $("#broca").val(),
        "broca1" : $("#broca1").val(),
        "broca_punto" : $("#broca_punto").val(),
        "broca_punto1" : $("#broca_punto1").val(),
        "negro" : $("#negro").val(),
        "negro1" : $("#negro1").val(),
        "vinagre" : $("#vinagre").val(),
        "vinagre1" : $("#vinagre1").val(),
        "humedad" : $("#humedad").val(),
        "factor" : $("#factor").val(),
        "observaciones_analisisfisico" : $("#observaciones_analisisfisico").val(),
        "accion":"3"
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
    
    "accion" : "2"
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