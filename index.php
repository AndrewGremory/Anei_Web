<?php include_once "includes/header.php"; ?>

<div class="wrapper">

    <!-- sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h2>ANEI</h2>
        </div>

        <ul class="list-unstyled components">
            <p>Gestion de recibo</p>
            <li class="active">
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
</div>

<?php include_once "includes/footer.php"; ?>
