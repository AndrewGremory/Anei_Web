<?php include_once "includes/header.php"; ?>

<div class="container text-center">
		<h2>LIQUIDACION</h2>
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
    
			<!-- -----------------CAFE --------------------------------->	
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">
 

<!-- ----------------- SECADO--------------------------------->  
function liquidacion()
    { 
    
      var parametros = 
      {
        "codigo_liquidacion" : $("#codigo_liquidacion").val(),
        "precio_dia" : $("#precio_dia").val(),
        "rendimiento" : $("#rendimiento").val(),
        "bonificacion" : $("#bonificacion").val(),
        "prima_producto" : $("#prima_producto").val(),
        "precio_final" : $("#precio_final").val(),
        "subtotal" : $("#subtotal").val(),
        "politica" : $("#politica").val(),
        "observaciones_liquidacion" : $("#observaciones_liquidacion").val(),
        "dian" : $("#dian").val(),
        "asociados" : $("#asociados").val(),
        "neto_pagar2" : $("#neto_pagar2").val(),
        "ahorro" : $("#ahorro").val(),
        "total_ahorro" : $("#total_ahorro").val(),
        "kilos_liquidacion" : $("#kilos_liquidacion").val(),
        "cedula_liquidacion" : $("#cedula_liquidacion").val(),
        "aporte" : $("#aporte").val(),
        "nombre_compra" : $("#nombre_compra").val(),
        "accion":"12"
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
        
        "accion" : "11"
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
    <!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
  
    

<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
<?php include_once "includes/footer.php"; ?>

