<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/dbv1gsu.css">
    
        <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>Anei</title>
</head>
<body>
<div class="wrapper">

    <!-- sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"></a>
            <img src="img/anei.png" class="img" alt="">
            
        </div>

        <ul class="list-unstyled components">
            <p>Gestion de recibo</p>
            <li class="">
                <!-- COMRPA -->
                <a href="#compra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comprar</a>
                <ul class="collapse list-unstyled" id="compra">
                    <li>
                        <a href="compra.php">Comprar</a>
                    </li>
                    <li>
                        <a href="analisis_fisico.php">Analisis Fisico</a>
                    </li>
                    <li>
                        <a href="analisis_sensorial.php">Analisis Sensorial</a>
                    </li>
                </ul>
            </li>
            <!-- LIQUIDAR -->
            <hr>
            <p>Gestion de liquidacion</p>
            <li>
                <a href="#liquidar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liquidaciones</a>
                <ul class="collapse list-unstyled" id="liquidar">
                    <li>
                        <a href="liquidacion.php">Liquidar</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    

    <!-- contenido de pagina -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

            <button class="btn btn-dark" id="sidebarCollapse">
                <i class="fas fa-align-left"></i>
                <span></span>
            </button>
            </div>
        </nav>        
    </div>
    
</body>

</html>
