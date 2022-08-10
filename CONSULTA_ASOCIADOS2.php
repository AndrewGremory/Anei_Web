<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
	
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>



<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

 $accion = $_POST['accion'];
 
 $dtz = new DateTimeZone("America/Bogota");
 $dt = new DateTime("now", $dtz);
 $fecha= $dt->format("Y-m-d");
 $hora= $dt->format("h:i:s");

if($accion == 1)
{  
        echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRES</th>
                <th>CEDULA</th>
                <th>CELULAR</th>
                <th>TIPO VINCULACIÓN</th>
                <th>NOMBRE FINCA</th>
                <th>CODIGO UP</th>
                <th>MUNICIPIO</th>
                <th>VEREDA</th>
                <th>STATUS</th>
                <th>CUPO CAFE</th>
                <th>CUPO CACAO</th>
                

            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from asociados");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['nombre_usuario'].'</td>
				 <td>'.$consul['cedula_usuario'].'</td>
				 <td>'.$consul['contacto'].'</td>
				 <td>'.$consul['tipo_vinculacion'].'</td>
				 <td>'.$consul['finca'].'</td>
				 <td>'.$consul['codigo_up'].'</td>
                 <td>'.$consul['municipio'].'</td>
				 <td>'.$consul['vereda'].'</td>
				 <td>'.$consul['estatus'].'</td>
				 <td>'.$consul['cupo_cafe'].'</td>
				 <td>'.$consul['cupo_cacao'].'</td>
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>NOMBRES</th>
         <th>CEDULA</th>
         <th>CELULAR</th>
         <th>TIPO VINCULACIÓN</th>
         <th>NOMBRE FINCA</th>
         <th>CODIGO UP</th>
         <th>MUNICIPIO</th>
         <th>VEREDA</th>
         <th>STATUS</th>
         <th>CUPO CAFE</th>
         <th>CUPO CACAO</th>
         </tr>
     </tfoot>
 </table>
';
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario LIKE '%$mi_busqueda%'or nombre_usuario LIKE '%$mi_busqueda%' or municipio LIKE '%$mi_busqueda%' or vereda LIKE '%$mi_busqueda%'
        or finca LIKE '%$mi_busqueda%' or codigo_up LIKE '%$mi_busqueda%' or estatus LIKE '%$mi_busqueda%' or tipo_vinculacion LIKE '%$mi_busqueda%' ");
		 echo'
         <table id="example" class="display" style="width:100%">
         <thead>
             <tr>
                 <th>NOMBRES</th>
                 <th>CEDULA</th>
                 <th>CELULAR</th>
                 <th>TIPO VINCULACIÓN</th>
                 <th>NOMBRE FINCA</th>
                 <th>CODIGO UP</th>
                 <th>MUNICIPIO</th>
                 <th>VEREDA</th>
                 <th>STATUS</th>
                 <th>CUPO CAFE</th>
                 <th>CUPO CACAO</th>
                 
 
             </tr>
         </thead>
 
         ';
        
         while($consul = mysqli_fetch_array($resultados))
         { 
          echo'
 
         
          <tbody>
              <tr>
                  <td>'.$consul['nombre_usuario'].'</td>
                  <td>'.$consul['cedula_usuario'].'</td>
                  <td>'.$consul['contacto'].'</td>
                  <td>'.$consul['tipo_vinculacion'].'</td>
                  <td>'.$consul['finca'].'</td>
                  <td>'.$consul['codigo_up'].'</td>
                  <td>'.$consul['municipio'].'</td>
                  <td>'.$consul['vereda'].'</td>
                  <td>'.$consul['estatus'].'</td>
                  <td>'.$consul['cupo_cafe'].'</td>
                  <td>'.$consul['cupo_cacao'].'</td>
              </tr>
              </tr>
              
          </tbody>
          
          ';
          }
         echo'
      <tfoot>
          <tr>
          <th>NOMBRES</th>
          <th>CEDULA</th>
          <th>CELULAR</th>
          <th>TIPO VINCULACIÓN</th>
          <th>NOMBRE FINCA</th>
          <th>CODIGO UP</th>
          <th>MUNICIPIO</th>
          <th>VEREDA</th>
          <th>STATUS</th>
          <th>CUPO CAFE</th>
          <th>CUPO CACAO</th>
          </tr>
      </tfoot>
  </table>
 ';
}
     
     ?>
</body>
</html>