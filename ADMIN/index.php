<?php 
  date_default_timezone_set("America/Mexico_City");
  $date = new DateTime();
  $fecha_inicio = $date->format('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Poll´sSystem</title>

        <link href="../CSS/ADMIN/styles.css" rel="stylesheet"/>
        <link
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
        <script type="text/javascript" language="javascript">
            history.pushState(null, null, location.href);
            window.onpopstate = function () {
                history.go(1);
            };
        </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Poll´s System</a>
            <button
                class="btn btn-link btn-sm order-1 order-lg-0"
                id="sidebarToggle"
                href="#">
                <i class="fas fa-bars"></i>
            </button >
          
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <?php   
      session_start();
        if (isset($_SESSION['u_usuario'])) {
         
        }
       ?>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="userDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php">Principal</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../cerrar_sesion.php">Salir</a>
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
                                CREAR ENCUESTA</a>

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

                               
                                    <button class="btn float-right btn_Deta btn-bloc" id="boton_agregar">
                                        AGREGAR ENCUESTA
                                    </button>
    <br></br>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="table-responsive">
                                                <div id="tabla_encuestas"></div>
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
            <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                crossorigin="anonymous"></script>
            <script
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script
                src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
                crossorigin="anonymous"></script>
            <script
                src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
                crossorigin="anonymous"></script>
            <script src="assets/demo/datatables-demo.js"></script>
            <script src="../js/jquery-3.3.1.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="JS/encuestas.js"></script>
        </body>
    </html>

    <div class="modal fade" id="modal_agregar" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">AGREGAR NUEVA ENCUESTA</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="titulo"
                                placeholder="Ingresa un título"
                                autocomplete="off"
                                autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <textarea
                                class="form-control"
                                id="descripcion"
                                placeholder="Añade una descripción"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha_final" class="col-sm-3 col-form-label">Creación</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="fecha_inicio"
                                value="<?php echo $fecha_inicio ?>"
                                readonly="»readonly»"
                                autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fecha_final" class="col-sm-3 col-form-label">Termino</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="fecha_final"
                                value="<?php echo $fecha_inicio ?>"
                                autocomplete="off">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-success" onclick="agregarEncuesta()">AGREGAR ENCUESTA</button>
                    <input
                        type="hidden"
                        id="hidden_id_usuario"
                        value="<?php echo $_SESSION['id_usuario'] ?>">
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_modificar" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title-center">MODIFICAR ENCUESTA</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <label for="modificar_titulo" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="modificar_titulo"
                                placeholder="Título">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <textarea
                                class="form-control"
                                id="modificar_descripcion"
                                placeholder="Descripción"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fecha_final" class="col-sm-3 col-form-label">Final</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="modificar_fecha_final"
                                placeholder="Fecha de Cierre"
                                autocomplete="off"
                                value="<?php echo $fecha_inicio ?>">

                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                    <button
                        type="button"
                        class="btn btn-success"
                        onclick="modificarDetallesEncuesta()">EDITAR ENCUESTA</button>
                    <input type="hidden" id="hidden_id_encuesta">
                </div>

            </div>
        </div>
    </div>