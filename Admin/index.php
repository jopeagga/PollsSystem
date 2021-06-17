<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Poll´sSystem</title>
        <link href="css/ADMIN/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Poll´s System</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <p><p>
                        <div class="nav">
                        
                            <a class="nav-link" href="principal.html">
                                <div class="sb-nav-link-icon" href="principal.html"><i class="fas fa-poll"></i></div>
                                CRAR ENCUESTA</a>

                            <a class="nav-link" href="principal.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-trash-alt"></i></div>
                                ELIMINAR ENCUESTA</a>

                            <a class="nav-link" href="reportes.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                                GENERAR REPORTES</a>

                            <a class="nav-link" href="principal.html"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                PRINCIPAL</a>

                            <a class="nav-link" href="dd.html"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-question"></i></div>
                                AYUDA</a>
                       </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4 text-center">LISTADO DE ENCUESTAS</h2>
                        
                        <div class="card mb-4">
                             <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NOMBRE</th>
                                                <th class="text-center">CREACIÓN</th>
                                                <th class="text-center">TERMINO</th>
                                                <th class="text-center">DETALLES</th>
                                                <th class="text-center">EDITAR</th>
                                                <th class="text-center">EDITAR</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">NOMBRE</th>
                                                <th class="text-center">CREACIÓN</th>
                                                <th class="text-center">TERMINO</th>
                                                <th class="text-center">INFORMACION</th>
                                                <th class="text-center">DETALLES</th>
                                                <th class="text-center">EDITAR</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>ENCUESTA 1</td>
                                                <td>05-Marzo-2021</td>
                                                <td>05-Julio-2021</td>
                                                <td>120 VISTAS<p><h9>100 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                            <tr>
                                                <td>ENCUESTA 2</td>
                                                <td>06-Marzo-2021</td>
                                                <td>06-Julio-2021</td>
                                                <td>180 VISTAS<p><h9>110 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                            <tr>
                                                <td>ENCUESTA 3</td>
                                                <td>05-Marzo-2021</td>
                                                <td>05-Julio-2021</td>
                                                <td>120 VISTAS<p><h9>100 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                             <tr>
                                                <td>ENCUESTA 4</td>
                                                <td>06-Marzo-2021</td>
                                                <td>06-Julio-2021</td>
                                                <td>180 VISTAS<p><h9>110 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                            <tr>
                                                <td>ENCUESTA 5</td>
                                                <td>05-Marzo-2021</td>
                                                <td>05-Julio-2021</td>
                                                <td>120 VISTAS<p><h9>100 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                            <tr>
                                                <td>ENCUESTA 6</td>
                                                <td>06-Marzo-2021</td>
                                                <td>06-Julio-2021</td>
                                                <td>180 VISTAS<p><h9>110 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                            <tr>
                                                <td>ENCUESTA 7</td>
                                                <td>05-Marzo-2021</td>
                                                <td>05-Julio-2021</td>
                                                <td>120 VISTAS<p><h9>100 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                             <tr>
                                                <td>ENCUESTA 8</td>
                                                <td>06-Marzo-2021</td>
                                                <td>06-Julio-2021</td>
                                                <td>180 VISTAS<p><h9>110 Respuestas</h9></p></td>
                                                <td><a class="btn btn_Deta btn-block" href="">DETALLES</a></td>
                                                <td><a class="btn btn_Edit btn-block" href="">EDITAR</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Integradora &copy; Sistema Encuestas</div>
                                    <div>
                                        <a href="#">Poll´s System</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>