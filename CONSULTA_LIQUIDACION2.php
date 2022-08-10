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
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>POLITICA</th>
                <th>PRECIO DEL DIA</th>
                <th>F. RENDIMIENTO</th>
                <th>BONIFICACION</th>
                <th>PRIMA</th>
                <th>V. KILO</th>
                <th>KILOS/LATAS</th>
                <th>SUBTOTAL</th>
                <th>DIAN</th>
                <th>ASOCIADOS</th>
                <th>AHORRO * KILO</th>
                <th>TOTAL AHORRADO</th>
                <th>APORTE</th>
                <th>TOTAL</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>OBSERVACIONES</th>

            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from liquidacion");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['cedula_liquidacion'].'</td>
				 <td>'.$consul['codigo_liquidacion'].'</td>
				 <td>'.$consul['politica'].'</td>
                 <td>'.$consul['precio_dia'].'</td>
                 <td>'.$consul['rendimiento'].'</td>
                 <td>'.$consul['bonificacion'].'</td>
                 <td>'.$consul['prima'].'</td>
                 <td>'.$consul['precio_final'].'</td>
                 <td>'.$consul['kilos_liquidacion'].'</td>
                 <td>'.$consul['subtotal'].'</td>
                 <td>'.$consul['dian'].'</td>
                 <td>'.$consul['asociados'].'</td>
                 <td>'.$consul['ahorro'].'</td>
                 <td>'.$consul['total_ahorro'].'</td>
                 <td>'.$consul['aporte'].'</td>
				 <td>'.$consul['neto_pagar'].'</td>
                 <td>'.$consul['fecha_liquidacion'].'</td>
                 <td>'.$consul['hora_liquidacion'].'</td>
                 <td>'.$consul['observaciones_liquidacion'].'</td>
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CEDULA</th>
         <th>CODIGO</th>
         <th>POLITICA</th>
         <th>PRECIO DEL DIA</th>
         <th>F. RENDIMIENTO</th>
         <th>BONIFICACION</th>
         <th>PRIMA</th>
         <th>V. KILO</th>
         <th>KILOS/LATAS</th>
         <th>SUBTOTAL</th>
         <th>DIAN</th>
         <th>ASOCIADOS</th>
         <th>AHORRO * KILO</th>
         <th>TOTAL AHORRADO</th>
         <th>APORTE</th>
         <th>TOTAL</th>
         <th>FECHA</th>
         <th>HORA</th>
         <th>OBSERVACIONES</th>
         </tr>
     </tfoot>
 </table>
';
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM liquidacion WHERE cedula_liquidacion LIKE '%$mi_busqueda%'or codigo_liquidacion LIKE '%$mi_busqueda%' or politica LIKE '%$mi_busqueda%' or fecha_liquidacion LIKE '%$mi_busqueda%'");
        echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CEDULA</th>
                <th>CODIGO</th>
                <th>POLITICA</th>
                <th>PRECIO DEL DIA</th>
                <th>F. RENDIMIENTO</th>
                <th>BONIFICACION</th>
                <th>PRIMA</th>
                <th>V. KILO</th>
                <th>KILOS/LATAS</th>
                <th>SUBTOTAL</th>
                <th>DIAN</th>
                <th>ASOCIADOS</th>
                <th>AHORRO * KILO</th>
                <th>TOTAL AHORRADO</th>
                <th>APORTE</th>
                <th>TOTAL</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>OBSERVACIONES</th>

            </tr>
        </thead>

        ';
		
		while($consul = mysqli_fetch_array($resultados))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['cedula_liquidacion'].'</td>
				 <td>'.$consul['codigo_liquidacion'].'</td>
				 <td>'.$consul['politica'].'</td>
                 <td>'.$consul['precio_dia'].'</td>
                 <td>'.$consul['rendimiento'].'</td>
                 <td>'.$consul['bonificacion'].'</td>
                 <td>'.$consul['prima'].'</td>
                 <td>'.$consul['precio_final'].'</td>
                 <td>'.$consul['kilos_liquidacion'].'</td>
                 <td>'.$consul['subtotal'].'</td>
                 <td>'.$consul['dian'].'</td>
                 <td>'.$consul['asociados'].'</td>
                 <td>'.$consul['ahorro'].'</td>
                 <td>'.$consul['total_ahorro'].'</td>
                 <td>'.$consul['aporte'].'</td>
				 <td>'.$consul['neto_pagar'].'</td>
                 <td>'.$consul['fecha_liquidacion'].'</td>
                 <td>'.$consul['hora_liquidacion'].'</td>
                 <td>'.$consul['observaciones_liquidacion'].'</td>
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CEDULA</th>
         <th>CODIGO</th>
         <th>POLITICA</th>
         <th>PRECIO DEL DIA</th>
         <th>F. RENDIMIENTO</th>
         <th>BONIFICACION</th>
         <th>PRIMA</th>
         <th>V. KILO</th>
         <th>KILOS/LATAS</th>
         <th>SUBTOTAL</th>
         <th>DIAN</th>
         <th>ASOCIADOS</th>
         <th>AHORRO * KILO</th>
         <th>TOTAL AHORRADO</th>
         <th>APORTE</th>
         <th>TOTAL</th>
         <th>FECHA</th>
         <th>HORA</th>
         <th>OBSERVACIONES</th>
         </tr>
     </tfoot>
 </table>
';
}
     
     ?>
</body>
</html>