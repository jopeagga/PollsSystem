<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/LOGIN/style.css" />
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-dark-tit"><h3 class="text-dark-tit text-center mb-0 text-dark my-4">RESULTADO</h3></div>
                                    <div class="card-body">
                                <?php
extract($_POST);
include("conexion.php");

$query="insert into usuarios (id_usuario, clave, nombres, apellidos, email, id_tipo_usuario) values ('$id_usuario', '$contrasena', '$nombre', '$apellidos', '$email', '$id_tipo_usuario')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<br><br><br><center><div class=text-dark>$nombre TU LOGIN ID ES:  $id_usuario Y FUE CREADO CORRECTAMENTE</div>";
echo "<br><center><div class=text-dark>INICIE SESIÓN USANDO SU ID</div>";
echo "<br><center><div class=text-dark><a href=login.php>CLICK AQUI</a></div>";
	
?>                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>