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
// <!-- ----------------- BUSQUEDA--------------------------------->  

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