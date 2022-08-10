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
                <th>CODIGO</th>
                <th>ALMENDRA TOTAL (gr)</th>
                <th>ALMENDRA TOTAL (%)</th>
                <th>ALMENDRA SANA (gr)</th>
                <th>ALMENDRA SANA(%)</th>
                <th>BROCA (gr)</th>
                <th>BROCA (%)</th>
                <th>BROCA PUNTO (gr)</th>
                <th>BROCA PUNTO (%)</th>
                <th>NEGRO (gr)</th>
                <th>NEGRO (%)</th>
                <th>VINAGRE (gr)</th>
                <th>VINAGRE (%)</th>
                <th>HUMEDAD</th>
                <th>FACTOR</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from analisisfisico");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['codigo_analisisfisico'].'</td>
				 <td>'.$consul['almendra_total'].'</td>
                 <td>'.$consul['almendra_total1'].'</td>
                 <td>'.$consul['almendra_sana'].'</td>
                 <td>'.$consul['almendra_sana1'].'</td>
				 <td>'.$consul['broca'].'</td>
                 <td>'.$consul['broca1'].'</td>
                 <td>'.$consul['broca_punto'].'</td>
                 <td>'.$consul['broca_punto1'].'</td>
				 <td>'.$consul['negro'].'</td>
                 <td>'.$consul['negro1'].'</td>
				 <td>'.$consul['vinagre'].'</td>
                 <td>'.$consul['vinagre1'].'</td>
				 <td>'.$consul['humedad'].'</td>
              	 <td>'.$consul['factor'].'</td>
                 <td>'.$consul['observaciones_analisisfisico'].'</td>
                 <td>'.$consul['fecha_analisisfisico'].'</td>
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CODIGO</th>
         <th>ALMENDRA TOTAL (gr)</th>
         <th>ALMENDRA TOTAL (%)</th>
         <th>ALMENDRA SANA (gr)</th>
         <th>ALMENDRA SANA(%)</th>
         <th>BROCA (gr)</th>
         <th>BROCA (%)</th>
         <th>BROCA PUNTO (gr)</th>
         <th>BROCA PUNTO (%)</th>
         <th>NEGRO (gr)</th>
         <th>NEGRO (%)</th>
         <th>VINAGRE (gr)</th>
         <th>VINAGRE (%)</th>
         <th>HUMEDAD</th>
         <th>FACTOR</th>
         <th>OBSERVACIONES</th>
         <th>FECHA</th>
         </tr>
     </tfoot>
 </table>
';
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM analisisfisico WHERE codigo_analisisfisico LIKE '%$mi_busqueda%'or fecha_analisisfisico LIKE '%$mi_busqueda%'");
        echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>ALMENDRA TOTAL (gr)</th>
                <th>ALMENDRA TOTAL (%)</th>
                <th>ALMENDRA SANA (gr)</th>
                <th>ALMENDRA SANA(%)</th>
                <th>BROCA (gr)</th>
                <th>BROCA (%)</th>
                <th>BROCA PUNTO (gr)</th>
                <th>BROCA PUNTO (%)</th>
                <th>NEGRO (gr)</th>
                <th>NEGRO (%)</th>
                <th>VINAGRE (gr)</th>
                <th>VINAGRE (%)</th>
                <th>HUMEDAD</th>
                <th>FACTOR</th>
                <th>OBSERVACIONES</th>
                <th>FECHA</th>
            </tr>
        </thead>

        ';
		
		while($consul = mysqli_fetch_array($resultados))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['codigo_analisisfisico'].'</td>
				 <td>'.$consul['almendra_total'].'</td>
                 <td>'.$consul['almendra_total1'].'</td>
                 <td>'.$consul['almendra_sana'].'</td>
                 <td>'.$consul['almendra_sana1'].'</td>
				 <td>'.$consul['broca'].'</td>
                 <td>'.$consul['broca1'].'</td>
                 <td>'.$consul['broca_punto'].'</td>
                 <td>'.$consul['broca_punto1'].'</td>
				 <td>'.$consul['negro'].'</td>
                 <td>'.$consul['negro1'].'</td>
				 <td>'.$consul['vinagre'].'</td>
                 <td>'.$consul['vinagre1'].'</td>
				 <td>'.$consul['humedad'].'</td>
              	 <td>'.$consul['factor'].'</td>
                 <td>'.$consul['observaciones_analisisfisico'].'</td>
                 <td>'.$consul['fecha_analisisfisico'].'</td>
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CODIGO</th>
         <th>ALMENDRA TOTAL (gr)</th>
         <th>ALMENDRA TOTAL (%)</th>
         <th>ALMENDRA SANA (gr)</th>
         <th>ALMENDRA SANA(%)</th>
         <th>BROCA (gr)</th>
         <th>BROCA (%)</th>
         <th>BROCA PUNTO (gr)</th>
         <th>BROCA PUNTO (%)</th>
         <th>NEGRO (gr)</th>
         <th>NEGRO (%)</th>
         <th>VINAGRE (gr)</th>
         <th>VINAGRE (%)</th>
         <th>HUMEDAD</th>
         <th>FACTOR</th>
         <th>OBSERVACIONES</th>
         <th>FECHA</th>
         </tr>
     </tfoot>
 </table>
';
}
     
     ?>
</body>
</html>