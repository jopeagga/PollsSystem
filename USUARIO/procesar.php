<?php

	require ('../conexion.php');

	$id_encuesta = $_POST['id_encuesta'];

	$query10 = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'";
	$resultado10 = $con->query($query10);
	$row10 = $resultado10->fetch_assoc();

  	$ids = array();

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
			<?php   
	      	session_start();
		        if (isset($_SESSION['u_usuario']) && isset($_SESSION['id_usuario'])) 
	       ?>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion.php">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4 text-center">LISTADO DE ENCUESTAS</h2>
                        
                        <div class="card mb-4">
                             <div class="card-body">
                                

							 <center>
		<div style="margin-top: 50px"></div>
		<?php
	$id_usuario = $_SESSION['id_usuario'];

		$query5 = "SELECT * FROM usuarios_encuestas WHERE id_usuario = '$id_usuario' AND id_encuesta = '$id_encuesta'";
		$resultado5 = $con->query($query5);
		$tamaño = $resultado5->num_rows;

		if ($tamaño > 0) {
			echo "YA RESPONDISTE ESTA ENCUESTA";
			echo "<br/>";
		} else {

			$query6 = "INSERT INTO usuarios_encuestas (id_usuario, id_encuesta) VALUES ('$id_usuario', '$id_encuesta')";
			$resultado6 = $con->query($query6);

			if ($row10['estado'] == '1') {
			 	for ($i = 1; $i <= 100; $i++) {

					if (isset($_POST[$i])) {
						$ids[$i] = $_POST[$i];

						$id = $ids[$i];

						$query2 = "SELECT id_opcion, id_pregunta, valor FROM opciones WHERE id_opcion = '$ids[$i]'";
						$resultado2 = $con->query($query2);

						if ($row2 = $resultado2->fetch_assoc()) {
							$id_opcion = $row2['id_opcion'];
							$query3 = "INSERT INTO resultados (id_opcion) 
							VALUES ('$id_opcion')";
							$resultado3 = $con->query($query3);
							if ($resultado3) {
								echo "RESPUESTA GUARDADA CORRECTAMENTE";
								echo "<br/>";
							} else { 
								echo "Error al ingresar resultado";
							} 
						}
					}
				}
			} else {
				echo "<div style='margin-top: 50px;'>ERROR!<br/>La encuesta se encuentra cerrada</div>";
			}
		}

		 ?>

		<br/>
		<a class="btn btn_Deta" href="index.php">VOLVER</a>
	</center>

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