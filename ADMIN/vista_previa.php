<?php			
  	require "../conexion.php";

  	$id_encuesta = $_GET['id_encuesta'];
 	$query2 = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta'";
  	$respuesta2 = $con->query($query2);

  	$query3 = "SELECT encuestas.titulo, encuestas.descripcion, preguntas.id_pregunta, preguntas.id_encuesta, preguntas.id_tipo_pregunta 
		FROM preguntas
		INNER JOIN encuestas
		ON preguntas.id_encuesta = encuestas.id_encuesta
		WHERE preguntas.id_encuesta = '$id_encuesta'";
	$respuesta3 = $con->query($query3);
	$row3 = $respuesta3->fetch_assoc();
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
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Salir</a>
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
                                
								<form class="form-inline my-2 my-lg-0" style="color: #fff">
          
	</form>
	<div class="card mb-4">
                             <div class="card-body">
	<center>
 	
 		<h1><?php echo $row3['titulo'] ?></h1>
		 <div class="container text-center">
 		<hr /> 
 		<p><?php echo $row3['descripcion'] ?></p>
 		<form action="procesar.php" method="Post" autocomplete="off">
 		<input type="hidden" id="id_encuesta" name="id_encuesta" value="<?php echo $id_encuesta ?>" />
		 <div class="card mb-4">
                             <div class="card-body">
 		<hr />



 		<?php

 			$i = 1; 
			while (($row2 = $respuesta2->fetch_assoc())) {
				
			$id = $row2['id_pregunta'];
			
			$dat = '<div class="container text-center">
			<hr /> ';

			$query = "SELECT preguntas.id_pregunta, preguntas.titulo, preguntas.id_tipo_pregunta, opciones.id_opcion, opciones.valor
				FROM opciones
				INNER JOIN preguntas
				ON preguntas.id_pregunta = opciones.id_pregunta
                WHERE preguntas.id_pregunta = $id
				ORDER BY opciones.id_pregunta, opciones.id_opcion";

			$respuesta = $con->query($query);
 echo $dat;
		 ?>
		 	<div class="container col-md-12">
			<h4><?php echo "$i. " . $row2['titulo'] ?></h4>
			
		<?php 
			while (($row = $respuesta->fetch_assoc())) {

		 ?>
			<div class="radio">
		      <label><input class="form-check-input" type="radio" name="<?php echo $row['id_pregunta'] ?>" value="<?php echo $row['id_opcion'] ?>" required> <?php echo $row['valor'] ?></label>
		    </div>

		
		<?php 	
			}
			$i++;
		}
		 ?>
		 	</div>
		<br/>
		
        </div>
		<br/>
		</form>
        <a href="index.php" class="btn btn_Deta">INICIO</a>
 	</div>
	</center>

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