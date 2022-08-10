<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/dbv1gsu.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
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
            <li class="active">
                <!-- COMRPA -->
                <a href="#compra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comprar</a>
                    <ul class="collapse list-unstyled" id="compra">
                        <li>
                            <a href="COMPRA.php">Comprar</a>
                        </li>
                        <li>
                            <a href="ANALISIS_FISICO.php">Analisis Fisico</a>
                        </li>
                        <li>
                            <a href="ANALISIS_SENSORIAL.php">Analisis Sensorial</a>
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
                    <li>
                        <a href="">Consulta </a>
                    </li>
                </ul>
            </li>
        </ul>


        <!-- <a href="#" class="nav-link"  data-toggle="collapse" data-target="#hola" aria-expanded="false" aria-controls="collapseLayouts" >
            <div class="sb-link-icon"><i class="fas fa-book-open"></i> hola</div>
        </a>
            <div class="collapse" id="hola">
                <a href="COMPRA.php" class="nav-link">Compra</a>
            </div>

        <div class="sb-sidenav-menu-heading">Herramientas</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Fichas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">

                                <a class="nav-link" href="agregar_ficha.php">Agregar Ficha</a>
                                <a class="nav-link" href="consultar_ficha.php">Consulta de Fichas</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUsuarios" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="agregar_user.php">Agregar usuario</a>
                                <a class="nav-link" href="consultar_user.php">Consulta de usuario</a>

                            </nav>
                        </div> -->
         
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


