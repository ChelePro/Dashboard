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
                            <div class="sb-sidenav-menu-heading">Princiapal</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Opciones</div>
                            <a class="nav-link" href="charts.php">
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Promedio de egresos 2018</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($Gastos2k18 as $Gastos18)
                                        {  
                                            echo $Gastos18['Gastos2018'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Promedio de egresos 2017</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($Gastos2k17 as $Gastos17)
                                        {  
                                            echo $Gastos17['Gastos2017'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Promedio de ingresos 2018</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($IngresosProm2k18 as $Ingresos2)
                                        {  
                                            echo $Ingresos2['TotalIngresos'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Promedio de ingresos 2017</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($IngresosProm2k17 as $Ingresos)
                                        {  
                                            echo $Ingresos['TotalIngresos'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total de remesas 2017</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($Remesas2017 as $Remesas1)
                                        {  
                                            echo $Remesas1['Remesas1'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total de remesas 2018</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($Remesas2018 as $Remesas2)
                                        {  
                                            echo $Remesas2['Remesas2'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Ingresos totales del sector privado</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36;
                                        <?php  
                                        foreach($IngresoPriv as $Privado)
                                        {  
                                            echo $Privado['IngresosPv'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Ingresos Totales del sector publico</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3> &#36; 
                                        <?php  
                                        foreach($IngresoPub as $Publico)
                                        {  
                                            echo $Publico['IngresosPb'];
                                        } ?> 
                                    </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Ingresos empleo 2017
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="60"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Ingresos empleo 2018
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="60"></canvas></div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
