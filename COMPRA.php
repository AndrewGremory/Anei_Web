<?php include_once "includes/header.php"; ?>

	<!-- <script src="jquery-3.4.1.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
  
<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script> -->

<!-- <link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script> -->


</head>
<body>


<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">


    <input type="text" id="cuadro_buscar" onkeypress="mi_busqueda();" list="listanavegadores" placeholder="Buscar cedula...">
        <datalist id="listanavegadores">
        <?php
      $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select  *from asociados") or die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {?>
        
        <option label="<?php echo $reg['nombre_usuario']?>" value="<?php echo $reg['cedula_usuario']?>" >
        
        <?php } ?>
        </datalist> 

    

    <input type="text" id="cuadro_buscar" class="form-control" onkeypress="mi_busqueda();" placeholder="Buscar cedula...">
    </div>

		<hr>
		<h2 class="text-center">SERVICIOS</h2>
   <div class="row justify-content-md-center">		
    <div class="col-md-2">
    <div id="mostrar_mensaje"></div>
    </div>
   </div>

    
			<!-- -----------------CAFE --------------------------------->	
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 


<?php include_once "includes/footer.php"; ?>