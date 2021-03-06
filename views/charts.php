<?php

    require '../model/ConsultasBD.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link  rel="icon"   href="assets/img/icono.png" type="image/png" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Dashboard</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Principal</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Opciones</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Datos estadísticos
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Acerca de
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Sistema de Análisis de Ingresos y Egresos del Salvadore&ntilde;o</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Datos estadísticos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Egresos durante el 2017 
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                           <tr>
                                       <td>Grupo ocupacional</td>
                                        <td>Promedio total de gastos</td>
                                         <td>Gasto en alimentacion</td>
                                          <td>Gasto en educacion</td>
                                           <td>Gasto en salud</td>
                                           <td>Gasto en empleo</td>
                                           <td>Gasto en vivienda</td>
                                    </tr>

                                    <?php

                                        foreach($ActLaborales2017 as $mostrar)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar['GrupoOcupacional']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Promedio_Gastos']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Gasto_Alimentacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Gasto_Educacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Gasto_Salud']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Gasto_Vivienda']; ?></td>
                                        <td>&#36;<?php echo $mostrar['Gasto_Empleo']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                  Egresos totales por grupo ocupacional durante el 2018
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                           <tr>
                                       <td>Grupo ocupacional</td>
                                        <td>Promedio total de gastos</td>
                                         <td>Gasto en alimentacion</td>
                                          <td>Gasto en educacion</td>
                                           <td>Gasto en salud</td>
                                           <td>Gasto en empleo</td>
                                           <td>Gasto en vivienda</td>
                                    </tr>

                                    <?php

                                        foreach($ActLaborales2018 as $mostrar2)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar2['GrupoOcupacional']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Promedio_Gastos']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Gasto_Alimentacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Gasto_Educacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Gasto_Salud']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Gasto_Vivienda']; ?></td>
                                        <td>&#36;<?php echo $mostrar2['Gasto_Empleo']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Comprativa general entre egresos del 2017 y 2018
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                       <td>A&ntilde;o</td>
                                        <td>Promedio total de gastos</td>
                                         <td>Gasto en alimentacion</td>
                                          <td>Gasto en educacion</td>
                                           <td>Gasto en salud</td>
                                           <td>Gasto en empleo</td>
                                           <td>Gasto en vivienda</td>
                                    </tr>
                                    <?php

                                        foreach($Comparativa as $mostrar5)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar5['anio']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Promedio_Gastos']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Gasto_Alimentacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Gasto_Educacion']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Gasto_Salud']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Gasto_Vivienda']; ?></td>
                                        <td>&#36;<?php echo $mostrar5['Gasto_Empleo']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                           <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                  Ingresos dependientes e independientes durante el 2017
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <tr>
                                       <td>Mes</td>
                                       <td>Ingreso empleo dependiente</td>
                                        <td>Ingreso empleo independiente</td>
                                         <td>Totales</td>
                                          <td>Promedio de ingresos</td>
                                    </tr>

                                    <?php

                                        foreach($IngresosMes2017 as $mostrar3)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar3['mes']; ?></td>
                                        <td>&#36;<?php echo $mostrar3['IngresoEmpleoDep']; ?></td>
                                        <td>&#36;<?php echo $mostrar3['IngresoEmpleoIndep']; ?></td>
                                        <td>&#36;<?php echo $mostrar3['Totales']; ?></td>
                                        <td>&#36;<?php echo $mostrar3['Promedio_Ingresos']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>


                           <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                  Ingresos dependientes e independientes durante el 2018
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <td>Mes</td>
                                        <td>Ingreso empleo dependiente</td>
                                        <td>Ingreso empleo independiente</td>
                                        <td>Totales</td>
                                        <td>Promedio de ingresos</td>
                                    </tr>

                                    <?php

                                        foreach($IngresosMes2018 as $mostrar4)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar4['mes']; ?></td>
                                        <td>&#36;<?php echo $mostrar4['IngresoEmpleoDep']; ?></td>
                                        <td>&#36;<?php echo $mostrar4['IngresoEmpleoIndep']; ?></td>
                                        <td>&#36;<?php echo $mostrar4['Totales']; ?></td>
                                        <td>&#36;<?php echo $mostrar4['Promedio_Ingresos']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Sistema de Analisis de Ingresos y Egresos del Salvadore&ntilde;o &copy; 2020</div>
                               
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </body>
</html>