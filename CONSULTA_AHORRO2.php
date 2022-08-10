<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
	




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
                <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>KILOS AHORRADOS</th>
                <th>VALOR * KILO</th>
                <th>VALOR AHORRADO</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from ahorro");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['nombre_ahorro'].'</td>
				 <td>'.$consul['cedula_ahorro'].'</td>
				 <td>'.$consul['codigo_ahorro'].'</td>
				 <td>'.$consul['kilos_ahorro'].'</td>
				 <td>'.$consul['cantidad_ahorro'].'</td>
				 <td>'.$consul['valor_ahorro'].'</td>
                 <td>'.$consul['fecha_ahorro'].'</td>
				 <td>'.$consul['hora_ahorro'].'</td>
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>NOMBRE</th>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>KILOS AHORRADOS</th>
                <th>VALOR * KILO</th>
                <th>VALOR AHORRADO</th>
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
		$resultados = mysqli_query($conexion," SELECT * FROM ahorro WHERE cedula_ahorro LIKE '%$mi_busqueda%'or nombre_ahorro LIKE '%$mi_busqueda%' or codigo_ahorro LIKE '%$mi_busqueda%' or kilos_ahorro LIKE '%$mi_busqueda%'
        or cantidad_ahorro LIKE '%$mi_busqueda%' or valor_ahorro LIKE '%$mi_busqueda%' or fecha_ahorro LIKE '%$mi_busqueda%' or hora_ahorro LIKE '%$mi_busqueda%'");
		 echo'
         <table id="example" class="display" style="width:100%">
         <thead>
             <tr>
                 <th>NOMBRE</th>
                 <th>CEDULA</th>
                 <th>CODIGO</th>
                 <th>KILOS AHORRADOS</th>
                 <th>VALOR * KILO</th>
                 <th>VALOR AHORRADO</th>
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
                  <td>'.$consul['nombre_ahorro'].'</td>
                  <td>'.$consul['cedula_ahorro'].'</td>
                  <td>'.$consul['codigo_ahorro'].'</td>
                  <td>'.$consul['kilos_ahorro'].'</td>
                  <td>'.$consul['cantidad_ahorro'].'</td>
                  <td>'.$consul['valor_ahorro'].'</td>
                  <td>'.$consul['fecha_ahorro'].'</td>
                  <td>'.$consul['hora_ahorro'].'</td>
                 
              </tr>
              </tr>
              
          </tbody>
          
          ';
          }
         echo'
      <tfoot>
          <tr>
          <th>NOMBRE</th>
                 <th>CEDULA</th>
                 <th>CODIGO</th>
                 <th>KILOS AHORRADOS</th>
                 <th>VALOR * KILO</th>
                 <th>VALOR AHORRADO</th>
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