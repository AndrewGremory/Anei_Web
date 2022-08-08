<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
 
	<script type="text/javascript">
		
		function boni()
		{ 
			var b= document.getElementById('precio_dia').value;
			var o= document.getElementById('rendimiento').value;
			var a = document.getElementById('bonificacion').value;

			
			if (document.getElementById('producto').value =="cafe mojado" || document.getElementById('producto').value =="cacao en baba") 
			{ 
              o=0; 
			}

			if (document.getElementById('politica').value =="politica2" && document.getElementById('producto').value =="cafe pergamino seco") 
			{
			
			 var d = parseInt(a) + parseInt(b);
			 document.getElementById('precio_final').value= d;
		    } 
		    if (document.getElementById('politica').value=="politica1" && document.getElementById('producto').value =="cafe pergamino seco")
			 {
			   var c= document.getElementById('prima_producto').value;
			   var e = parseInt(a) + parseInt(c)+ parseInt(o);
			   document.getElementById('precio_final').value= e;
		     }

			 if (document.getElementById('politica').value =="politica2" && document.getElementById('producto').value =="cacao seco") 
			{
			
			 var d = parseInt(a) + parseInt(b);
			 document.getElementById('precio_final').value= d;
		    } 
		    if (document.getElementById('politica').value=="politica1" && document.getElementById('producto').value =="cacao seco")
			 {
			   var c= document.getElementById('prima_producto').value;
			   var e = parseInt(a) + parseInt(c)+ parseInt(o);
			   document.getElementById('precio_final').value= e;
		     }

			var f = document.getElementById('precio_final').value;
			var g= document.getElementById('kilos_netos').value;
			var h = parseInt(f) * parseInt(g);
			document.getElementById('subtotal').value= h;
			
			if (document.getElementById('producto').value =="cacao seco" || document.getElementById('producto').value =="cacao en baba" ) 
			{ 
				var i = document.getElementById('subtotal').value;
			    var j = parseInt(i)*0.003;
			    document.getElementById('dian').value= j;
			}

			if (document.getElementById('producto').value =="cafe pergamino seco" || document.getElementById('producto').value =="cafe mojado" ) 
			{ 
				var i = document.getElementById('subtotal').value;
			    var j = parseInt(i)*0.005;
			    document.getElementById('dian').value= j;
			}

			var k = parseInt(h)*0.01;
			document.getElementById('asociados').value= k;
			var l = parseInt(h)-parseInt(j)-parseInt(k);
			document.getElementById('neto_pagar').value= l;
		}

		function facr() 
		{   var p = document.getElementById('almendra_sana').value;
			var ss = ((parseInt(p))/250)*100;
			var q = (250*70)/parseInt(p);
			document.getElementById('almendra_sana1').value = ss;
			document.getElementById('factor').value = q;
	    }

		function altotal() 
		{   var r = document.getElementById('almendra_total').value;
			var s = (parseInt(r)/250)*100;
			document.getElementById('almendra_total1').value = s;
		}

		function bro() 
		{   var t = document.getElementById('broca').value;
			var u = (parseInt(t)/250)*100;
			document.getElementById('broca1').value = u;
		}

		function bropu() 
		{   var z = document.getElementById('broca_punto').value;
			var aa = (parseInt(z)/250)*100;
			document.getElementById('broca_punto1').value = aa;
		}

		function ne() 
		{   var v = document.getElementById('negro').value;
			var w = (parseInt(v)/250)*100;
			document.getElementById('negro1').value = w;
		}

		function vi() 
		{   var x = document.getElementById('vinagre').value;
			var y = (parseInt(x)/250)*100;
			document.getElementById('vinagre1').value = y;
		}

		function reto() 
		{   var bb = document.getElementById('cantidad_resultado').value;
			var cc = document.getElementById('costo_resultado').value;
			var dd = parseInt(bb)*parseInt(cc);
			document.getElementById('costo_total_resultado').value =dd;
		}

		function ocultar()
		{
			if (document.getElementById('unidad').value =="kilo") 
			{ 
				document.getElementById("latas_compra").disabled=true;
				document.getElementById("kilos_brutos").disabled=false;
				document.getElementById("numero_estopas").disabled=false;
				document.getElementById("estado_estopas").disabled=false;
				document.getElementById("numero_sacos").disabled=false;
				document.getElementById("estado_sacos").disabled=false;
			}

		
			if (document.getElementById('unidad').value =="lata") 
			{ 
				document.getElementById("kilos_brutos").disabled=true;
				document.getElementById("latas_compra").disabled=false;
				document.getElementById("numero_estopas").disabled=true;
				document.getElementById("estado_estopas").disabled=true;
				document.getElementById("numero_sacos").disabled=true;
				document.getElementById("estado_sacos").disabled=true;
			}
        }

		function lat() 
		{   var ee = document.getElementById('latas_compra').value;
			var ff = parseInt(ee)*8;
			document.getElementById('kilos_netos').value = ff;
			
		}
   
		function kibru() 
		{   var ee = document.getElementById('kilos_brutos').value;
			var gg = document.getElementById('numero_sacos').value;
			var hh = document.getElementById('numero_estopas').value;
			var ii= (parseInt(gg)*400 + parseInt(hh)*400)/1000;
			var ff = parseInt(ee) - ii;
			document.getElementById('kilos_netos').value = ff;
		}

		function aho() 
		{   var jj = document.getElementById('kilos_netos').value;
			var ll = document.getElementById('ahorro').value;
			var kk = parseInt(jj)* parseInt(ll);
			document.getElementById('total_ahorro').value = kk;
			
		}
		function com()
		{ alert ("El numero ya fue registrado");}

	</script>
</head>
<body>
<?php


	 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

	$accion = $_POST['accion'];
    
	$dtz = new DateTimeZone("America/Bogota");
    $dt = new DateTime("now", $dtz);
    $fecha= $dt->format("Y-m-d");
    $hora= $dt->format("h:i:s");


	if($accion == 4)
	{
   	    $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario LIKE '%$mi_busqueda%'or nombre_usuario LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{
			$resul = mysqli_query($conexion," SELECT  *FROM compra");
			$a=1;
		   while($consul = mysqli_fetch_array($resul))
		   {  
			if ($consul['fecha_compra']==$fecha and $consul['municipio_compra']==$consulta['municipio'])
			{  $a=$a+1;
				if($consul['municipio_compra']=="codazzi")
				 {$muni="AC";} 
				if($consul['municipio_compra']=="pueblo bello")
				 {$muni="PB";}
				 if($consul['municipio_compra']=="valledupar")
				 {$muni="VP";}  
		    } 
		   }
		       if($consulta['municipio']=="codazzi")
		         {$muni="AC";} 
		       if($consulta['municipio']=="pueblo bello")
		         {$muni="PB";}
		         if($consulta['municipio']=="valledupar")
		         {$muni="VP";} 

				 $r = mysqli_query($conexion," SELECT  *FROM compra");
				 $cupos_vendidos=0;
				 while($c = mysqli_fetch_array($r))
				 {  $year= date("Y", strtotime($c['fecha_compra'])); 
				  if ($c['cedula']==$consulta['cedula_usuario'] and $year==date("Y"))
				  { $cupos_vendidos= $cupos_vendidos + $c['kilos_netos'];} 
				 } 
				 
				 $cupo_disponible= $consulta['cupo_bcs'] - $cupos_vendidos;
			 echo 
			 '
			 <form> 
			 <div class="form-group row ">
                 Nombre:
               <div class="col-lg-20">
                 <input type="text" class="form-control" id="nombre_compra" name="nombre_compra" value="'.$consulta['nombre_usuario'].'" readonly ><br>
                </div>
             </div>

			 <div class="form-group row ">
			 Cedula:
		   <div class="col-lg-12">
			 <input type="number" class="form-control" id="cedula_compra" name="cedula_compra" value="'.$consulta['cedula_usuario'].'" readonly ><br>
			</div>
		 </div>

		 
		 <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="marca" name="marca" value="'.$muni.' '.$fecha.' '.$a.'"  ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Cupo:
		 <div class="col-lg-12">
		  <input type="number" class="form-control" id="cupo_bcs" name="cupo_bcs" value="'.$consulta['cupo_bcs'].'" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Cupo Utilizado:
		 <div class="col-lg-12">
		  <input type="number" class="form-control" id="cupos_vendidos" name="cupos_vendidos" value="'.$cupos_vendidos.'" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Cupo Disponible:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="cupo_disponible" name="cupo_disponible" value="'.$cupo_disponible.'" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Municipio Compra:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="municipio_compra" name="municipio_compra" value="'.$consulta['municipio'].'" readonly ><br>
		 </div>
		</div>
 
		 Producto:
		 <select name="producto" id="producto">
		   <option>seleccione</option>
		   <option value="cafe pergamino seco">Cafe pergamino seco </option>
		   <option value="cafe mojado">Cafe mojado</option>
		   <option value="cacao seco">Cacao seco </option>
		   <option value="cacao en baba">Cacao en baba</option>
		 </select><br><br>

		 <div class="form-group row ">
		 Tipo:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="tipo_grano" name="tipo_grano" value="'.$consulta['estatus'].'" readonly ><br>
		 </div>
		</div>

         Unidad de medida:
         <select name="unidad" id="unidad" onChange="ocultar()">
		  <option>seleccione</option>
          <option value="kilo">Kilo </option>
          <option value="lata">Lata</option>
         </select><br><br>

		 <div class="form-group row">
		 N° Estopas
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="numero_estopas" name="numero_estopas" value="0"><br>
		   </div>
		 </div>

		 Estado estopas:
         <select name="estado_estopas" id="estado_estopas">
		  <option>seleccione</option>
          <option value="buena">Buena </option>
          <option value="regular">Regular</option>
		  <option value="mala">Mala</option>
         </select><br><br>

		 <div class="form-group row">
		 N° Sacos
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="numero_sacos" name="numero_sacos" value="0"><br>
		   </div>
		 </div>

					 
		 Estado Sacos:
         <select name="estado_sacos" id="estado_sacos">
		  <option>seleccione</option>
          <option value="buena">Buena </option>
          <option value="regular">Regular</option>
		  <option value="mala">Mala</option>
         </select><br><br>

	   <div class="form-group row">
		 Kilos Brutos:
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="kilos_brutos" name="kilos_brutos" value="0" onkeyup="kibru()"><br>
		   </div>
		 </div>

		 <div class="form-group row">
		 N° de Latas: 
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="latas_compra" name="latas_compra" value="0" onkeyup="lat()"><br>
		   </div>
		 </div>

		 <div class="form-group row">
		 Kilos Netos
		   <div class="col-lg-9">
			 <input type="text" class="form-control" id="kilos_netos" name="kilos_netos" value="0" readonly><br>
		   </div>
		 </div>
		 
	  <p>Observaciones:</p>
	  <textarea name="observaciones" id="observaciones" rows="3" cols="30" placeholder="escriba aqui las observaciones"></textarea><br><br>
		  
		 <div class="form-group row ">
		   <div class="offset-lg-1 col-lg-8">
		   <button  onclick="compra();">Guardar</button>
		   </form>
			 '; 
		} 
	}    
 if($accion == 10)
 {    
	$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE marca  = '$_POST[marca]'");
		if($consulta = mysqli_fetch_array($resultados))
		{echo "<script>alert('Este registro ya existe')</script>";} 
		else
		{mysqli_query($conexion,"insert into compra (municipio_compra, cedula, producto, unidad, marca, numero_estopas, estado_estopas, observaciones, fecha_compra, numero_sacos, estado_sacos, kilos_brutos, kilos_netos, tipo_grano, latas_compra) values ('$_POST[municipio_compra]',$_POST[cedula_compra],  '$_POST[producto]', '$_POST[unidad]' ,'$_POST[marca]', $_POST[numero_estopas], '$_POST[estado_estopas]','$_POST[observaciones]','$fecha',$_POST[numero_sacos],'$_POST[estado_sacos]',$_POST[kilos_brutos],$_POST[kilos_netos], '$_POST[tipo_grano]', $_POST[latas_compra])"); echo "<script>alert('Registro Exitoso')</script>";} 
 } 

 if($accion == 11)
 {    
	    $mi_busqueda = $_POST['mi_busqueda'];
		
		
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ $producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano']; $kilos_netos=$consulta['kilos_netos']; $unidad=$consulta['unidad'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			$r = mysqli_query($conexion," SELECT * FROM producto WHERE nombre='$producto' and tipo='$tipo_grano'");
			if($c= mysqli_fetch_array($r))
		    {$precio_dia=$c['precio']; $prima_producto=$c['prima_producto'];}
			
			$re = mysqli_query($conexion," SELECT * FROM analisisfisico WHERE codigo_analisisfisico='$consulta[marca]'");
			if($ce= mysqli_fetch_array($re))
		    { $rendimiento=0;
				if($consulta['producto']=="cafe pergamino seco")
				{$rendimiento=($precio_dia*92.8/$ce['factor']);}
			}

			$res = mysqli_query($conexion," SELECT  *FROM liquidacion join compra on marca=codigo_liquidacion where cedula=$consulta[cedula] ");
			$cupos_vendidos=0;
			while($con = mysqli_fetch_array($res))
			{  $year= date("Y", strtotime($con['fecha_compra'])); 
			 if ($year==date("Y"))
			 { $cupos_vendidos= $cupos_vendidos + $con['kilos_liquidacion'];} 
			} 
			
			$cupo_disponible= $consul['cupo_bcs'] - $cupos_vendidos;
			echo 
			'
		
		    <form> 
		     <div class="form-group row ">
			   Nombre:
			  <div class="col-lg-20">
			   <input type="text" class="form-control" id="nombre_compra" name="nombre_compra" value="'.$nombre_usuario.'" readonly ><br>
			  </div>
		    </div>

		   <div class="form-group row ">
		     Cedula:
		     <div class="col-lg-20">
		       <input type="number" class="form-control" id="cedula_compra" name="cedula_compra" value="'.$consulta['cedula'].'" readonly ><br>
		     </div>
	      </div>

	   
	      <div class="form-group row ">
	        Codigo de entrada:
	        <div class="col-lg-20">
		     <input type="text" class="form-control" id="codigo_liquidacion" name="codigo_liquidacion" value="'.$consulta['marca'].'" readonly><br>
	        </div>
	      </div>


		  <div class="form-group row ">
		 Cupo:
		 <div class="col-lg-12">
		  <input type="number" class="form-control" id="cupo_bcs" name="cupo_bcs" value="'.$consul['cupo_bcs'].'" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Cupo Utilizado:
		 <div class="col-lg-12">
		  <input type="number" class="form-control" id="cupos_vendidos" name="cupos_vendidos" value="'.$cupos_vendidos.'" readonly ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Cupo Disponible:
		 <div class="col-lg-12">
		  <input type="text" class="form-control" id="cupo_disponible" name="cupo_disponible" value="'.$cupo_disponible.'" readonly ><br>
		 </div>
		</div>


		  <div class="form-group row ">
	        Producto:
	        <div class="col-lg-20">
		     <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br>
	        </div>
	      </div>

		  <div class="form-group row ">
		  Tipo:
		  <div class="col-lg-20">
		   <input type="text" class="form-control" id="tipo_grano" name="tipo_grano" value="'.$tipo_grano.'" readonly><br>
		  </div>
		</div>

		  <div class="form-group row ">
	        Cantidad:
	        <div class="col-lg-20">
		     <input type="number" class="form-control" id="kilos_netos" name="kilos_netos" value="'.$kilos_netos.'" readonly><br>
	        </div>
	      </div>

		  <div class="form-group row ">
		  Politica de Pago:
		  <div class="col-lg-20">
		   <input type="text" class="form-control" id="politica" name="politica" value="'.$c['politica'].'" readonly><br>
		  </div>
		</div>
		
		  <div class="form-group row ">
		   precio del Dia:
           <div class="col-lg-20">
			<input type="number" class="form-control" id="precio_dia" name="precio_dia" value="'.$precio_dia.'" readonly ><br>
		   </div>
	      </div>

		  <div class="form-group row ">
		 Factor de Rendimiento:
		  <div class="col-lg-20">
		   <input type="number" class="form-control" id="factor" name="factor" readonly value="'.$ce['factor'].'"><br>
		  </div>
		 </div>

		  <div class="form-group row ">
		  Valor por Calidad:
		  <div class="col-lg-20">
		   <input type="number" class="form-control" id="rendimiento" name="rendimiento" readonly value="'.$rendimiento.'"><br>
		  </div>
		 </div>

		  <div class="form-group row ">
		   prima del Dia:
           <div class="col-lg-20">
			<input type="number" class="form-control" id="prima_producto" name="prima_producto" value="'.$prima_producto.'" readonly ><br>
		   </div>
	      </div>
		
		  <div class="form-group row ">
		  Bonificacion:
		  <div class="col-lg-20">
		   <input type="number" class="form-control" id="bonificacion" name="bonificacion" onkeyup="boni()"><br>
		  </div>
		 </div>

		 <div class="form-group row ">
		  Kilos Netos:
		  <div class="col-lg-20">
		   <input type="number" class="form-control" id="kilos_liquidacion" name="kilos_liquidacion"  value="'.$kilos_netos.'"readonly><br>
		  </div>
		 </div>
		
		 <div class="form-group row ">
         Precio por kilo:
         <div class="col-lg-20">
           <input type="number" class="form-control" id="precio_final" name="precio_final" readonly><br>
         </div>
         </div>


		 <div class="form-group row ">
		  Subtotal:
		  <div class="col-lg-20">
		    <input type="number" class="form-control" id="subtotal" name="subtotal" readonly><br>
		  </div>
		 </div>

		 <div class="form-group row ">
		  %Dian:
		  <div class="col-lg-20">
		    <input type="number" class="form-control" id="dian" name="dian" readonly><br>
		  </div>
		 </div>

		 <div class="form-group row ">
		 %asociados:
		 <div class="col-lg-20">
		   <input type="number" class="form-control" id="asociados" name="asociados" readonly><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Total a pagar:
		 <div class="col-lg-20">
		   <input type="number" class="form-control" id="neto_pagar" name="neto_pagar" readonly><br>
		 </div>
		</div>

		<div class="form-group row ">
		 ahorro por kilo:
		 <div class="col-lg-20">
		   <input type="text" class="form-control" id="ahorro" name="ahorro" value="0" onkeyup="aho()"><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Total ahorro:
		 <div class="col-lg-20">
		   <input type="text" class="form-control" id="total_ahorro" name="total_ahorro" value="0" readonly><br>
		 </div>
		</div>

		 <p>Observaciones:</p>
	  <textarea name="observaciones_liquidacion" id="observaciones_liquidacion" rows="4" cols="40" placeholder="escriba aqui las observaciones"></textarea><br><br>
		
		  <div class="form-group row ">
		   <div class="offset-lg-1 col-lg-8">
		    <button  onclick="liquidacion();">Guardar</button>
		   </div> 
		  </div>
		  </form>
           ';
		
		
	}
  
} 

 if($accion == 12)
 {
  mysqli_query($conexion,"insert into liquidacion (codigo_liquidacion,precio_dia,rendimiento,bonificacion,prima,precio_final,subtotal,fecha_liquidacion,hora_liquidacion,politica,observaciones_liquidacion,dian,asociados,neto_pagar,ahorro, total_ahorro, kilos_liquidacion) values ('$_POST[codigo_liquidacion]',$_POST[precio_dia],$_POST[rendimiento],$_POST[bonificacion],$_POST[prima_producto],$_POST[precio_final],$_POST[subtotal],'$fecha' ,'$hora','$_POST[politica]','$_POST[observaciones_liquidacion]',$_POST[dian],$_POST[asociados], $_POST[neto_pagar],$_POST[ahorro],$_POST[total_ahorro],$_POST[kilos_liquidacion])");
 } 

 	if($accion == 1)
	{ 
		mysqli_query($conexion,"insert into asociados (nombre_usuario, municipio, vereda, finca, fecha_registro, cedula_usuario, numero_up, codigo_up, estatus, contacto, cupo_bcs, tipo_vinculacion) values ('$_POST[nombre_usuario]','$_POST[municipio]','$_POST[vereda]','$_POST[finca]', '$fecha',$_POST[cedula_usuario],$_POST[numero_up],'$_POST[codigo_up]','$_POST[estatus]',$_POST[contacto],$_POST[cupo_bcs], '$_POST[tipo_vinculacion]')");
	
    }

	if($accion == 2)
	  {
		$mi_busqueda = $_POST['mi_busqueda'];
		
		
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ $producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			
			echo 
			'
			<form>       

			<div class="form-group row ">
			Nombre:
		   <div class="col-lg-20">
			<input type="text" class="form-control" value="'.$consul['nombre_usuario'].'" readonly ><br>
		   </div>
		 </div>

		<div class="form-group row ">
		  Cedula:
		  <div class="col-lg-20">
			<input type="number" class="form-control" value="'.$consul['cedula_usuario'].'" readonly ><br>
		  </div>
	   </div>

	
	   <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="codigo_analisisfisico" name="codigo_analisisfisico" value="'.$consulta['marca'].'" readonly><br>
		 </div>
	   </div>

	   <div class="form-group row ">
		 Producto:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br>
		 </div>
	   </div>

	   <div class="form-group row ">
	   Tipo de grano:
	   <div class="col-lg-20">
		<input type="text" class="form-control"  id="tipo_grano name="tipo_grano" value="'.$tipo_grano.'" readonly><br>
	   </div>
	 </div>

	   
	  <div class="form-group row">
	   Almendra Total (gr):
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="almendra_total" name="almendra_total"  onkeyup="altotal()" ><br>
		</div>
      </div>

	  <div class="form-group row">
		Almendra Sana (gr):
	    <div class="col-lg-7">
	    	<input type="number" class="form-control" id="almendra_sana" name="almendra_sana"  onkeyup="facr()"><br>
        </div>
     </div>

	 <div class="form-group row">
		%Almendra Sana (gr):
	    <div class="col-lg-7">
	    	<input type="number" class="form-control" id="almendra_sana1" name="almendra_sana1"  ><br>
        </div>
     </div>

	 <div class="form-group row">
	 % Almendra Total:
	 <div class="col-lg-7">
		 <input type="number" class="form-control" id="almendra_total1" name="almendra_total1" readonly><br>
	 </div>
  </div>


	 <div class="form-group row">
	     Broca (gr):
	   <div class="col-lg-7">
		 <input type="number" class="form-control" id="broca" name="broca" min="0"  onkeyup="bro()"><br>
	   </div>
	 </div>

	 <div class="form-group row">
	 % Broca:
	<div class="col-lg-7">
	  <input type="number" class="form-control" id="broca1" name="broca1" readonly><br>
	</div>
  </div>

  			<div class="form-group row">
			 Broca Punto (gr):
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="broca_punto" name="broca_punto" min="0" onkeyup="bropu()"><br>
			  </div>
			</div>

			<div class="form-group row">
			% Broca Punto:
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="broca_punto1" name="broca_punto1" readonly><br>
			  </div>
			</div>

			<div class="form-group row">
			 Negro (gr):
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="negro" name="negro" min="0"  onkeyup="ne()"><br>
			  </div>
			</div>

			<div class="form-group row">
			% Negro:
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="negro1" name="negro1" readonly><br>
			  </div>
			</div>

			<div class="form-group row">
			 Vinagre (gr):
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="vinagre" name="vinagre" min="0"  max="200" onkeyup="vi()"><br>
			  </div>
			</div>

			<div class="form-group row">
			% Vinagre:
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="vinagre1" name="vinagre1" readonly><br>
			  </div>
			</div>

			<div class="form-group row">
			%Humedad:
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="humedad" name="humedad" min="0"><br>
			  </div>
			</div>

			<div class="form-group row">
			%Factor de Rendimiento :
			  <div class="col-lg-7">
				<input type="number" class="form-control" id="factor" name="factor" ><br>
			  </div>
			</div>

		<p>Observaciones:</p>
		 <textarea name="observaciones_analisisfisico" id="observaciones_analisisfisico" rows="4" cols="40" placeholder="escriba aqui las observaciones"></textarea><br><br>
			 
			<div class="form-group row ">
			  <div class="offset-lg-1 col-lg-8">
			  	<button  onclick="analisisfisico();">Guardar</button>
			
			  </div> 
			</div>
		
       		</form>
		   
          ';
		}
   }

   if($accion ==3)
   {
	  mysqli_query($conexion,"insert into analisisfisico (codigo_analisisfisico, fecha_analisisfisico, almendra_total, almendra_total1, almendra_sana, almendra_sana1 , broca,broca1, broca_punto, broca_punto1, negro, negro1, vinagre, vinagre1, factor, observaciones_analisisfisico, humedad) values ('$_POST[codigo_analisisfisico]','$fecha', $_POST[almendra_total], $_POST[almendra_total1], $_POST[almendra_sana],$_POST[almendra_sana1], $_POST[broca],$_POST[broca1], $_POST[broca_punto],$_POST[broca_punto1], $_POST[negro],$_POST[negro1], $_POST[vinagre],$_POST[vinagre1], $_POST[factor], '$_POST[observaciones_analisisfisico]', $_POST[humedad] )");   

	}
	   if($accion == 5)
	   {
		$mi_busqueda = $_POST['mi_busqueda'];
		
		
		$resultados = mysqli_query($conexion," SELECT * FROM compra WHERE cedula LIKE '%$mi_busqueda%'or marca LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ $producto=$consulta['producto']; $tipo_grano=$consulta['tipo_grano'];
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			
			echo 
			'
			<form>       

			<div class="form-group row ">
			Nombre:
		   <div class="col-lg-20">
			<input type="text" class="form-control" value="'.$consul['nombre_usuario'].'" readonly ><br>
		   </div>
		 </div>

		<div class="form-group row ">
		  Cedula:
		  <div class="col-lg-20">
			<input type="number" class="form-control" value="'.$consul['cedula_usuario'].'" readonly ><br>
		  </div>
	   </div>

	
	   <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="codigo_sensorial" name="codigo_sensorial" value="'.$consulta['marca'].'" readonly><br>
		 </div>
	   </div>

	   <div class="form-group row ">
		 Producto:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="producto" name="producto" value="'.$producto.'" readonly><br>
		 </div>
	   </div>

	   <div class="form-group row ">
	   Producto:
	   <div class="col-lg-20">
		<input type="text" class="form-control"  value="'.$tipo_grano.'" readonly><br>
	   </div>
	 </div>

	   
	  <div class="form-group row">
	  puntaje scaa:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="puntaje_scaa" name="puntaje_scaa"  placeholder="0"><br><br>
		</div>
      </div>

	  Acidez:
	    <select name="acidez" id="acidez">
		  <option>seleccione</option>
		  <option value="baja">Baja </option>
		  <option value="media">Media</option>
		  <option value="alta">Alta</option>
		 </select> <br> <br> 

	 <p>Notas:</p>
	 <textarea name="notas" id="notas" rows="4" cols="40" placeholder="descriptores de calidad"></textarea><br><br>

			 
			<div class="form-group row ">
			  <div class="offset-lg-1 col-lg-8">
			  	<button  onclick="analisissensorial();">Guardar</button>
			
			  </div> 
			</div>
			</form>
		    
           ';

		}
	   }  
	 
	   if($accion == 13)
	   {
		   mysqli_query($conexion,"insert into analisissensorial (codigo_sensorial, fecha_sensorial, puntaje_scaa, acidez, notas) values ('$_POST[codigo_sensorial]','$fecha', $_POST[puntaje_scaa], '$_POST[acidez]','$_POST[notas]')");   
	   }

  if($accion == 14)
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario LIKE '%$mi_busqueda%'or nombre_usuario LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{
			$resul = mysqli_query($conexion," SELECT  *FROM compra");
			$a=1;
		   while($consul = mysqli_fetch_array($resul))
		   {  
			if ($consul['fecha_compra']==$fecha and $consul['municipio_compra']==$consulta['municipio'])
			{  $a=$a+1;
				if($consul['municipio_compra']=="codazzi")
				 {$muni="AC";} 
				if($consul['municipio_compra']=="pueblo bello")
				 {$muni="PB";}
				 if($consul['municipio_compra']=="valledupar")
				 {$muni="VP";}  
		    } 
		   }
		       if($consulta['municipio']=="codazzi")
		         {$muni="AC";} 
		       if($consulta['municipio']=="pueblo bello")
		         {$muni="PB";}
		         if($consulta['municipio']=="valledupar")
		         {$muni="VP";} 

				 
			 echo 
			 '
			 <form> 
			 <div class="form-group row ">
                 Nombre:
               <div class="col-lg-20">
                 <input type="text" class="form-control" id="nombre_secado" name="nombre_secado" value="'.$consulta['nombre_usuario'].'" readonly ><br>
                </div>
             </div>

			 <div class="form-group row ">
			 Cedula:
		   <div class="col-lg-12">
			 <input type="number" class="form-control" id="cedula_secado" name="cedula_secado" value="'.$consulta['cedula_usuario'].'" readonly ><br>
			</div>
		 </div>

		 
		 <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="codigo_secado" name="codigo_secado" value="'.$muni.' '.$fecha.' '.$a.'"  ><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Tipo de Usurio:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario" value="'.$consulta['tipo_vinculacion'].'" readonly><br><br>
		 </div>
		</div>

		<div class="form-group row ">
		 Municipio:
		 <div class="col-lg-15">
		   <input type="text" class="form-control" id="municipio_secado" name="municipio_secado" value="'.$consulta['municipio'].'" readonly><br><br>
		 </div>
		</div>

		 Producto:
		 <select name="producto_secado" id="producto_secado">
		   <option>seleccione</option>
		   <option value="cafe mojado">Cafe Mojado</option>
		   <option value="cacao en baba">Cacao en Baba</option>
		 </select><br><br>

		 <div class="form-group row">
		 N° de Latas
		   <div class="col-lg-9">
			 <input type="number" class="form-control" id="numero_latas" name="numero_latas" placeholder="0" min="0"><br><br>
		   </div>
		 </div>

		 Humedad:
		 <select name="humedad_secado" id="humedad_secado">
		   <option>seleccione</option>
		   <option value="mojado">Mojado</option>
		   <option value="oreado">Oreado</option>
		
		 </select><br><br>

		 <p>Observaciones:</p>
		 <textarea name="observaciones_secado" id="observaciones_secado" rows="3" cols="30" placeholder="escriba aqui las observaciones"></textarea><br><br>
	

		  
		 <div class="form-group row ">
		   <div class="offset-lg-1 col-lg-8">
		    <button  onclick="secado();">Guardar</button>
		   </div>
	     </div>
		   </form>
			 '; 
		}
     }

	 if($accion == 6)
	 {
	  mysqli_query($conexion,"insert into secado (codigo_secado, producto_secado, numero_latas, fecha_secado, tipo_usuario, observaciones_secado, humedad_secado, cedula_secado, municipio_secado) values ('$_POST[codigo_secado]','$_POST[producto_secado]',$_POST[numero_latas],'$fecha' ,'$_POST[tipo_usuario]','$_POST[observaciones_secado]','$_POST[humedad_secado]', $_POST[cedula_secado], '$_POST[municipio_secado]')");
	 } 

	 if($accion == 15)
	 {
		$mi_busqueda = $_POST['mi_busqueda'];
		
		
		$resultados = mysqli_query($conexion," SELECT * FROM secado WHERE cedula_secado LIKE '%$mi_busqueda%'or codigo_secado LIKE '%$mi_busqueda%'");
		if($consulta = mysqli_fetch_array($resultados))
		{ 
			$resul = mysqli_query($conexion," SELECT * FROM asociados WHERE cedula_usuario=$consulta[cedula_secado]");
			if($consul= mysqli_fetch_array($resul))
		    {$nombre_usuario=$consul['nombre_usuario'];}
			
			echo 
			'
			<form>       

			<div class="form-group row ">
			Nombre:
		   <div class="col-lg-20">
			<input type="text" class="form-control" value="'.$consul['nombre_usuario'].'" readonly ><br>
		   </div>
		 </div>

		<div class="form-group row ">
		  Cedula:
		  <div class="col-lg-20">
			<input type="number" class="form-control" value="'.$consul['cedula_usuario'].'" readonly ><br>
		  </div>
	   </div>

	
	   <div class="form-group row ">
		 Codigo de entrada:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="codigo_resultado" name="codigo_resultado" value="'.$consulta['codigo_secado'].'" readonly><br>
		 </div>
	   </div>

	   <div class="form-group row ">
		 Producto:
		 <div class="col-lg-20">
		  <input type="text" class="form-control" id="producto" name="producto" value="'.$consulta['producto_secado'].'" readonly><br><br>
		 </div>
	   </div>

	   
	   Tipo de Secado:
	   <select name="tiposecado_resultado" id="tiposecado_resultado">
	       <option>seleccione</option>
		   <option value="patio">Patio </option>
		   <option value="patio mini">Patio mini</option>
		   <option value="secadora la mesa">Secadora la Mesa</option>
		  </select> <br> <br> 

   	  <div class="form-group row">
	  Precio x Kilo:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="costo_resultado" name="costo_resultado"  placeholder="0"><br><br>
		</div>
      </div>

	  <div class="form-group row">
	  Kilos secos:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="cantidad_resultado" name="cantidad_resultado"  placeholder="0" onkeyup="reto();"><br><br>
		</div>
      </div>

	  <div class="form-group row">
	  Total a Pagar	:
		<div class="col-lg-7">
		 <input type="number" class="form-control" id="costo_total_resultado" name="costo_total_resultado"  placeholder="0" readonly><br><br>
		</div>
      </div>

	  Tipo de Pago:
	    <select name="tipo_pago" id="tipo_pago">
		  <option>seleccione</option>
		  <option value="efectivo">Efectivo </option>
		  <option value="cafe">Cafe</option>
		  <option value="cacao">Cacao</option>
		</select> <br> <br> 

	 <p>Observaciones:</p>
	 <textarea name="observaciones_resultado" id="observaciones_resultado" rows="4" cols="40" placeholder="descriptores de calidad"></textarea><br><br>

			 
			<div class="form-group row ">
			  <div class="offset-lg-1 col-lg-8">
			  	<button  onclick="resultado_secado();">Guardar</button>
			
			  </div> 
			</div>
			</form>
		    
           ';

		}
	  }

	 if($accion == 7)
	 {
		mysqli_query($conexion,"insert into resultadosecado (codigo_resultado, fecha_resultado, cantidad_resultado, costo_resultado, costo_total_resultado, tiposecado_resultado, observaciones_resultado,tipo_pago) values ('$_POST[codigo_resultado]','$fecha', $_POST[cantidad_resultado], $_POST[costo_resultado],$_POST[costo_total_resultado],'$_POST[tiposecado_resultado]','$_POST[observaciones_resultado]', '$_POST[tipo_pago]')");   
	  }

	 if($accion == 9)
	 {
		mysqli_query($conexion,"insert into turno (cedula_turno, municipio_turno, fecha_turno, hora_turno) values ($_POST[cedula_turno],'$_POST[municipio_turno]','$fecha','$hora')");   
	  }
	
	  	
	   
	 

	  if($accion == 8)
	  { 
		$resul= mysqli_query($conexion,"select *from compra join asociados on cedula=cedula_usuario where marca='$_POST[codigo_liquidacion]'");
		if($consul = mysqli_fetch_array($resul))
		{
		   
		   if($_POST['politica']=="politica1" and $consul['tipo_grano']=="organico" and $consul['producto']=="Cafe pergamino seco")
		   {
				   $re= mysqli_query($conexion,"select * from analisisfisico where codigo_analisisfisico='$_POST[codigo_liquidacion]'");
				   if($con = mysqli_fetch_array($re))
				   { 
					$resultado= mysqli_query($conexion,"select *from producto where nombre= 'cafe'");
	                if($consulta = mysqli_fetch_array($resultado))
	                { 
					 mysqli_query($conexion,"insert into liquidacion (codigo_liquidacion, precio_dia, organico_seco, estandar_seco, organico_mojado, estandar_mojado ,valor_calidad, bonificacion, prima, precio_final, total_liquidacion, dian, asociados, neto_pagar ,politica,fecha_liquidacion, hora_liquidacion, observaciones_liquidacion) values ('$_POST[codigo_liquidacion]',$consulta[precio], ($consulta[organico_seco]*92.8)/$con[factor], $_POST[bonificacion], $consulta[prima_producto], ((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion])+$consulta[prima_producto], $consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto]), $consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto])*0.005, $consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto])*001,  $consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto]) - ($consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto])*0.005) - ($consul[kilos_netos]*((($consulta[organico_seco]*92.8)/$con[factor])+$_POST[bonificacion]+$consulta[prima_producto])*001) , '$_POST[politica]','$fecha','$hora','$_POST[observaciones_liquidacion]')") or die("Problemas en la insercion:". mysqli_error($conexion));   
				    }
			       } 
			}	   
			if($_POST['politica']=="politica2" and $consul['tipo_grano']=="organico" and $consul['producto']=="Cafe pergamino seco")
			   {
				 $re= mysqli_query($conexion,"select * from analisisfisico where codigo_analisisfisico='$_POST[codigo_liquidacion]'");
				 if($con = mysqli_fetch_array($re))
				 {
				  $r= mysqli_query($conexion,"select *from compra where marca='$_POST[codigo_liquidacion]'");
				  if($c = mysqli_fetch_array($r))
				  {
				   mysqli_query($conexion,"insert into liquidacion (codigo_liquidacion, fecha_liquidacion, hora_liquidacion, precio_dia, valor_calidad, bonificacion, prima, precio_final, total_liquidacion, politica, observaciones_liquidacion) values ('$_POST[codigo_liquidacion]','$fecha','$hora',$consulta[precio], 0, $_POST[bonificacion], $consulta[prima_producto], $consulta[precio]+$_POST[bonificacion], $c[kilos_netos]*($consulta[precio]+$_POST[bonificacion]), '$_POST[politica]','$_POST[observaciones_liquidacion]')") or die("Problemas en la insercion:". mysqli_error($conexion));   
				  }
			     }
		       }
        }
	   }
	    
	  if($accion == 9)
	  {
		 mysqli_query($conexion,"insert into turno (cedula_turno, municipio_turno, fecha_turno, hora_turno) values ($_POST[cedula_turno],'$_POST[municipio_turno]','$fecha','$hora')");   
	   }
			
	   else
	{
            
    }
    
     
     ?>
</body>
</html>