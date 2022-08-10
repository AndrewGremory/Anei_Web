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
            <th>CEDULA</th>
            <th>MUNICIPIO</th>
            <th>TURNO</th>
            <th>FECHA</th> 
            <th>HORA</th> 
            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from turno");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
             <td>'.$consul['cedula_turno'].'</td>
             <td>'.$consul['municipio_turno'].'</td>
             <td>'.$consul['turno'].'</td>
             <td>'.$consul['fecha_turno'].'</td>
             <td>'.$consul['hora_turno'].'</td>
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
          <th>CEDULA</th>
          <th>MUNICIPIO</th>
          <th>TURNO</th>
          <th>FECHA</th> 
          <th>HORA</th>
         </tr>
     </tfoot>
 </table>
';
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM turno WHERE cedula_turno LIKE '%$mi_busqueda%'or municipio_turno LIKE '%$mi_busqueda%' or turno LIKE '%$mi_busqueda%' or fecha_turno LIKE '%$mi_busqueda%'");
		echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>CEDULA</th>
            <th>MUNICIPIO</th>
            <th>TURNO</th>
            <th>FECHA</th> 
            <th>HORA</th> 
            </tr>
        </thead>

        ';
		
		while($consul = mysqli_fetch_array($resultados))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
             <td>'.$consul['cedula_turno'].'</td>
             <td>'.$consul['municipio_turno'].'</td>
             <td>'.$consul['turno'].'</td>
             <td>'.$consul['fecha_turno'].'</td>
             <td>'.$consul['hora_turno'].'</td>
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
          <th>CEDULA</th>
          <th>MUNICIPIO</th>
          <th>TURNO</th>
          <th>FECHA</th> 
          <th>HORA</th>
         </tr>
     </tfoot>
 </table>
';
}
     
     ?>
</body>
</html>