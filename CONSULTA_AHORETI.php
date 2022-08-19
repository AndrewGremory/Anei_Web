<?php include_once "includes/header.php"; ?>
<div class="container">

    <div class="container-fluid">
    
    <?php
     $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
    
     //$accion = $_POST['accion'];
     $accion = 1;
     
     $dtz = new DateTimeZone("America/Bogota");
     $dt = new DateTime("now", $dtz);
     $fecha= $dt->format("Y-m-d");
     $hora= $dt->format("h:i:s");
    
    if($accion == 1)
    {  
            echo'
            <table id="ahorro" class="style" style="width:100%">
            <thead>
                <tr>
                    <th class="col">NOMBRE</th>
                    <th class="col">CEDULA</th>
                    <th class="col">AHORRO</th>
                    <th class="col">RETIRO</th>
                    <th class="col">DISPONIBLE</th>
    
                   
                </tr>
            </thead>
    
            ';
           
            $resul = mysqli_query($conexion,"select nombre_ahorro, cedula_ahorro, sum(valor_ahorro) as total from ahorro group by (cedula_ahorro)");
            while($consul = mysqli_fetch_array($resul))
            {  $resultado = mysqli_query($conexion,"select sum(valor_retiro) as total2 from retiro where cedula_retiro=$consul[cedula_ahorro] ");
                $retiro=0;
                while($consulta = mysqli_fetch_array($resultado))
                {$retiro=  $consulta['total2'];}
             echo'
    
            
             <tbody>
                 <tr>
                     <td>'.$consul['nombre_ahorro'].'</td>
                     <td>'.$consul['cedula_ahorro'].'</td>
                     <td>'.$consul['total'].'</td>
                     <td>'.$retiro.'</td>
                     <td>'.$consul['total']-$retiro.'</td>
                    
                 </tr>
                 </tr>
                 
             </tbody>
             
             ';
             }
            echo'
         <tfoot>
             <tr>
             
             <th class="col">NOMBRE</th>
             <th class="col">CEDULA</th>
             <th class="col">AHORRO</th>
             <th class="col">RETIRO</th>
             <th class="col">DISPONIBLE</th>
    
                   
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
         <table id="prueba">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011-07-25</td>
                    <td>$170,750</td>
                </tr>
            </tbody>
            <tfoot>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
            </tfoot>
         </table>
        </div>
</div>

<?php include_once "includes/footer.php"; ?>
