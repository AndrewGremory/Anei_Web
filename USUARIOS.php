<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

</body>
</html>
<script type="text/javascript">
function usuario()
    { 
    
      var parametros = 
      {
        
        "nombre_usuario" : $("#nombre_usuario").val(),
        "municipio" : $("#municipio").val(),
        "vereda" : $("#vereda").val(),
        "finca" : $("#finca").val(),
        "tipo_vinculacion" : $("#tipo_vinculacion").val(),
        "cedula_usuario" : $("#cedula_usuario").val(),
        "numero_up" : $("#numero_up").val(),
        "codigo_up" : $("#codigo_up").val(),
        "estatus" : $("#estatus").val(),
        "cupo_bcs" : $("#cupo_bcs").val(),
        "contacto" : $("#contacto").val(),
        "correo" : $("#correo").val(),
        "accion":"1"
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
    </script>