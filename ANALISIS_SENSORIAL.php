<?php include_once "includes/header.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>                        
<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">    

                         <input type="text" id="cuadro_buscar" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

                            $regi = mysqli_query($conexion, "select  *from asociados join compra on cedula=cedula_usuario") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($consu = mysqli_fetch_array($regi)) 
                            {
                           
                        ?>
        
                        <option label="<?php echo $consu['nombre_usuario'].' '. $consu['cedula_usuario']?>"   value="<?php echo $consu['marca']?>" >
                        
                        <?php } ?>
                        </datalist>                       
        </div>
                        
                        <hr>
		                
                        <div class="row justify-content-md-center">		
                          <div class="col-md-2">
                            <div id="mostrar_mensaje"></div>
                          </div>
                        </div>
                       
</div>

                       
 </body>
 </html>

<script type="text/javascript">
<?php include_once "includes/footer.php"; ?>
