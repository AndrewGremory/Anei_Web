function compra()
    { 
    
      var parametros = 
      {
        "cedula_compra" : $("#cedula_compra").val(),
        "marca" : $("#marca").val(),
        "unidad" : $("#unidad").val(),
        "producto" : $("#producto").val(),
        "kilos_brutos" : $("#kilos_brutos").val(),
        "kilos_netos" : $("#kilos_netos").val(),
        "tipo_grano" : $("#tipo_grano").val(),
        "latas_compra" : $("#latas_compra").val(),
        "numero_sacos" : $("#numero_sacos").val(),
        "estado_sacos" : $("#estado_sacos").val(),
        "observaciones" : $("#observaciones").val(),
        "numero_estopas" : $("#numero_estopas").val(),
        "estado_estopas" : $("#estado_estopas").val(),
        "ahorro" : $("#ahorro").val(),
        "total_ahorro" : $("#total_ahorro").val(),
        "municipio_compra" : $("#municipio_compra").val(),
        "accion":"10"
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
 
// <!-- ----------------- COMPRAR CAFE--------------------------------->
// <!-- ----------------- SECADO--------------------------------->  
function secado()
    { 
    
      var parametros = 
      {
        "codigo_entrada" : $("#codigo_entrada").val(),
        "cedula_secado" : $("#cedula_secado").val(),
        "producto_secado" : $("#producto_secado").val(),
        "numero_latas" : $("#numero_latas").val(),
        "humedad" : $("#humedad").val(),
        "asociado" : $("#asociado").val(),
        "observaciones" : $("#observaciones2").val(),
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
   
    // <!-- ----------------- RESULTADO SECADO--------------------------------->  
function resultadosecado()
    { 
    
      var parametros = 
      {
        "codigo_resultado" : $("#codigo_resultado").val(),
        "cantidad_resultado" : $("#cantidad_resultado").val(),
        "costo_resultado" : $("#costo_resultado").val(),
        "tipo_pago" : $("#tipo_pago").val(),
        "tiposecado_resultado" : $("#tiposecado_resultado").val(),
        "observaciones_resultado" : $("#observaciones_resultado").val(),
        "accion":"5"
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
   
 
// <!-- ----------------- RESULTADO SECADO--------------------------------->
// <!-- ----------------- ASOCIADO--------------------------------->  
  function usuario()
    { 
    
      var parametros = 
      {
        "sexo" : $("#sexo").val(),
        "nombre_usuario" : $("#nombre_usuario").val(),
        "fecha_nacimiento" : $("#fecha_nacimiento").val(),
        "municipio" : $("#municipio").val(),
        "vereda" : $("#vereda").val(),
        "finca" : $("#finca").val(),
        "hectareas" : $("#hectareas").val(),
        "tipo" : $("#tipo").val(),
        "cedula_usuario" : $("#cedula_usuario").val(),
        "numero_up" : $("#numero_up").val(),
        "codigo_up" : $("#codigo_up").val(),
        "estatus" : $("#estatus").val(),
        "cupo_bcs" : $("#cupo_bcs").val(),
        "contacto" : $("#contacto").val(),
        "correo" : $("#correo").val(),
        "accion":"3"
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
    // <!-- ----------------- NO ASOCIADO--------------------------------->  
  function noasociados()
    { 
    
      var parametros = 
      {
        "nombres_completos" : $("#nombres_completos").val(),
        "municipio_noasociados" : $("#municipio_noasociados").val(),
        "vereda_noasociados" : $("#vereda_noasociados").val(),
        "finca_noasociados" : $("#finca_noasociados").val(),
        "tipo_noasociados" : $("#tipo_noasociados").val(),
        "cedula_noasociados" : $("#cedula_noasociados").val(),
        "contacto_noasociados" : $("#contacto_noasociados").val(),
        "producion_noasociados" : $("#producion_noasociados").val(),
        "accion":"4"
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
 
 
// <!-- ----------------- ANALISIS FISICO--------------------------------->
function analisisfisico()
    { 
    
      var parametros = 
      {
        "codigo_analisisfisico" : $("#codigo_analisisfisico").val(),
        "almendra_total" : $("#almendra_total").val(),
        "almendra_sana" : $("#almendra_sana").val(),
        "broca" : $("#broca").val(),
        "broca_punto" : $("#broca_punto").val(),
        "negro" : $("#negro").val(),
        "vinagre" : $("#vinagre").val(),
        "humedad" : $("#humedad").val(),
        "observaciones_analisisfisico" : $("#observaciones_analisisfisico").val(),
        "accion":"6"
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
    // <!-- ----------------- ANALISIS SENSORIAL--------------------------------->  
function analisissensorial()
    { 
    
      var parametros = 
      {
        "codigo_sensorial" : $("#codigo_sensorial").val(),
        "puntaje_scaa" : $("#puntaje_scaa").val(),
        "acidez" : $("#acidez").val(),
        "notas" : $("#notas").val(),
        "accion":"7"
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

    // <!-- ----------------- LIQUIDACION--------------------------------->  
function liquidacion()
    { 
    
      var parametros = 
      {
        "codigo_liquidacion" : $("#codigo_liquidacion").val(),
        "bonificacion" : $("#bonificacion").val(),
        "politica" : $("#politica").val(),
        "observaciones_liquidacion" : $("#observaciones_liquidacion").val(),
        "accion":"8"
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

    // <!-- ----------------- TURNO--------------------------------->  
function turno()
    { 
    
      var parametros = 
      {
        "cedula_turno" : $("#cedula_turno").val(),
        "municipio_turno" : $("#municipio_turno").val(),
        "accion":"9"
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
// <!-- ----------------- CARGAR DATOS--------------------------------->
$(document).on("click", ".editar", function(){		        
    opcion = 2;//editar
    fila = $(this).closest("tr");	        
    cedula = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    nombre = fila.find('td:eq(1)').text();
    correo = fila.find('td:eq(2)').text();
    direccion = fila.find('td:eq(3)').text();
    usuario = fila.find('td:eq(4)').text();
    clave = fila.find('td:eq(5)').text();
    
    $("#cedu1").val(cedula);
    $("#nombre1").val(nombre);
    $("#correo1").val(correo);
    $("#direccion1").val(direccion);
    $("#usuario1").val(usuario);
    $("#clave1").val(clave);
    
});
// <!-- ----------------- CARGAR DATOS --------------------------------->
// <!-- ----------------- MODIFICAR --------------------------------->
function modificar()
    { 
    
      var parametros = 
      {
        "cedula" : $("#cedu1").val(),
        "nombre" : $("#nombre1").val(),
        "correo" : $("#correo1").val(),
        "direccion": $("#direccion1").val(),
        "usuario" : $("#usuario1").val(),
        "clave" : $("#clave1").val(),
        "accion":"5"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_php.php',
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
 
// <!-- ----------------- MODIFICAR --------------------------------->
// <!-- ----------------- ELIMINAR--------------------------------->  

	function eliminar(eliminar)
    { 
    	elimi = eliminar;
      var parametros = 
      {
        "eli" : elimi,
        "accion" : "3"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_php.php',
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
// <!-- ----------------- ELIMINAR --------------------------------->
 
// <!-- ----------------- CONSULTA --------------------------------->     	

      var parametros = 
      {
        "accion" : "200"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_php.php',
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

        
              
       
// <!-- ----------------- CONSULTA --------------------------------->    
// <!-- ----------------- BUSQUEDA--------------------------------->  

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