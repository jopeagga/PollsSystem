<?php 

	include '../conexion.php';
	$id_encuesta = $_GET['id_encuesta'];

	/* Consulta para extraer título y descripción de la encuesta*/
	$query3 = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'";
	$resultados3 = $con->query($query3);
	$row3 = $resultados3->fetch_assoc();

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
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <p><p>
                        <div class="nav">
                        
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon" href="index.php"><i class="fas fa-poll"></i></div>
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
                        
                        <div class="card mb-4">
                             <div class="card-body">
                             	
  	<?php

$consulta = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta'";
$resultados2 = $con->query($consulta);

?>

<hr/>
<div class="container text-center">
  <h1><?php echo $row3['titulo'] ?></h1>
  <p><?php echo $row3['descripcion'] ?></p>
</div>
<hr/>

<?php
  while ($row2 = $resultados2->fetch_assoc()) {
  
  $id_pregunta = $row2['id_pregunta'];

  $query = "SELECT preguntas.id_pregunta, preguntas.titulo,COUNT('preguntas.titulo') as count, opciones.valor FROM opciones INNER JOIN preguntas ON opciones.id_pregunta=preguntas.id_pregunta INNER JOIN resultados ON opciones.id_opcion=resultados.id_opcion WHERE preguntas.id_pregunta = '$id_pregunta' GROUP BY opciones.valor ORDER BY preguntas.id_pregunta";
  $resultados = $con->query($query);

		  /*TITULO*/
  echo "<h3>" . $row2['titulo'] . "</h3>";

  $cantidades = array();
  $titulos = array();
  $tamaño = array(); 
  $i = 1;
  while ($row = $resultados->fetch_assoc()) {
	  $cantidades[$i] = 0;
	  $cantidades[$i] = $row['count'];
	  $titulos[$i] = $row['valor'];
	  $i++;
  }

  $opciones = $i - 1;
  for ($i = 1; $i <= $opciones; $i++) {

  ?>

  <input type="hidden" class="<?php echo "valor$i" ?>" value="<?php echo $cantidades[$i] ?>">
  <input type="hidden" class="<?php echo "titulo$i" ?>" value="<?php echo $titulos[$i] ?>">

  <?php  
  }/*95*/

   ?>

  <input type="hidden" class="tamaño" value="<?php echo $opciones ?>">

  <div class="container" style="width: 50%; margin: 0 auto; width: 400px;">		
	  <canvas class="oilChart" width="600" height="400"></canvas>
  </div>

  <script src="js/Chart.min.js"></script>

  <hr/>

  <script src="js/resultados.js">

  </script>


<?php


}
 ?>
<div class="container text-center" style="margin-bottom: 20px">
  <a href="reporte1.php" class="btn btn-info" >GENERAR REPORTE</a>
  <!--
  <a href="reporte2.php?id_encuesta=<?php echo $id_encuesta ?>" class="btn btn-primary" target="_blank">GENERAR REPORTE2</a>
  -->
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
		<script src="../js/jquery-3.3.1.min.js"></script>
     	<script src="../js/popper.min.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    </body>
</html>