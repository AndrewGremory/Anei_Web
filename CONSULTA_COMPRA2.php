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
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
            </tr>
        </thead>

        ';
		$resul = mysqli_query($conexion,"select *from compra");
		while($consul = mysqli_fetch_array($resul))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['cedula'].'</td>
				 <td>'.$consul['marca'].'</td>
                 <td>'.$consul['municipio_compra'].'</td>
                 <td>'.$consul['producto'].'</td>
                 <td>'.$consul['tipo_grano'].'</td>
				 <td>'.$consul['unidad'].'</td>
                 <td>'.$consul['numero_estopas'].'</td>
                 <td>'.$consul['estado_estopas'].'</td>
                 <td>'.$consul['numero_sacos'].'</td>
				 <td>'.$consul['estado_sacos'].'</td>
                 <td>'.$consul['latas_compra'].'</td>
				 <td>'.$consul['kilos_brutos'].'</td>
                 <td>'.$consul['kilos_netos'].'</td>
				 <td>'.$consul['fecha_compra'].'</td>
              	 <td>'.$consul['observaciones'].'</td>
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
         </tr>
     </tfoot>
 </table>
';
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%' or municipio_compra LIKE '%$mi_busqueda%'
        or producto LIKE '%$mi_busqueda%' or tipo_grano LIKE '%$mi_busqueda%' or unidad LIKE '%$mi_busqueda%' or fecha_compra LIKE '%$mi_busqueda%'   ");
        echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
            </tr>
        </thead>

        ';
		
		while($consul = mysqli_fetch_array($resultados))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['cedula'].'</td>
				 <td>'.$consul['marca'].'</td>
                 <td>'.$consul['municipio_compra'].'</td>
                 <td>'.$consul['producto'].'</td>
                 <td>'.$consul['tipo_grano'].'</td>
				 <td>'.$consul['unidad'].'</td>
                 <td>'.$consul['numero_estopas'].'</td>
                 <td>'.$consul['estado_estopas'].'</td>
                 <td>'.$consul['numero_sacos'].'</td>
				 <td>'.$consul['estado_sacos'].'</td>
                 <td>'.$consul['latas_compra'].'</td>
				 <td>'.$consul['kilos_brutos'].'</td>
                 <td>'.$consul['kilos_netos'].'</td>
				 <td>'.$consul['fecha_compra'].'</td>
              	 <td>'.$consul['observaciones'].'</td>
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
         <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
         </tr>
     </tfoot>
 </table>
';
}
     
     ?>
</body>
</html>