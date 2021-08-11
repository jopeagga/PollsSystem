<?php

include("../conexion.php") ;

$id_pregunta = $_GET['id_pregunta'];

$query = "SELECT * FROM preguntas WHERE id_pregunta = '$id_pregunta'";
$respuesta = $con->query($query);
$row = $respuesta->fetch_assoc();
 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Poll´sSystem</title>
        <link href="../CSS/ADMIN/styles.css" rel="stylesheet" />
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
                        <a class="dropdown-item" href="index.php">Regresar</a>
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
        <h2 class="mt-4 text-center"><?php echo $row['titulo'] ?></h2>
        <button class="float-right btn btn_Deta" id="boton_agregar">
            AGREGAR OPCIÓN
        </button>
        <h4 class="mt-4 text">OPCIONES</h4>
              <input type="hidden" id="id_pregunta" value="<?php echo $row['id_pregunta'] ?>">
              <div class="table-responsive">
                <div id="tabla_opciones"></div>
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
        <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="js/opciones.js"></script>
    </body>
</html>



<!-- Modal Agregar Nueva Opción -->
<div class="modal fade" id="modal_agregar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">AGREGAR OPCIÓN</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="form-group row">
                <label for="valor" class="col-sm-3 col-form-label">Valor</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="valor" placeholder="Valor" autocomplete="off" autofocus>
                </div>
              </div>         
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="button" class="btn btn-success" onclick="agregarOpcion()">AÑADIR OPCIÓN</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal_modificar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">MODIFICAR OPCIÓN</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
              <div class="form-group row">
                <label for="modificar_valor" class="col-sm-3 col-form-label">Valor</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="modificar_valor" placeholder="Valor">
                </div>
              </div>           
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="button" class="btn btn-success" onclick="modificarDetallesOpcion()">GUARDAR CAMBIOS</button>
                <input type="hidden" id="hidden_id_opcion">
            </div>

        </div>
    </div>
</div>