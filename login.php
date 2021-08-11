<?php
  session_start();   
  if(isset($SESSION['u_usuario'])){  
    header("Location: validacion.php"); 
  }
  else{
    session_destroy(); 
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/LOGIN/style.css" />

    <title>Login/Poll`sSystem</title>
  </head>
  <body class="bg-dark">
      <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight">CREA Y ADMINISTRA ENCUESTAS</h5>
                          <a class="text-muted text-decoration-none">Poll´sSystem</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight">GENERA REPORTES Y VISUALIZA GRAFICAS</h5>
                          <a class="text-muted text-decoration-none">Poll´sSystem</a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100">
                    <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4"> 
                <h1 class="font-weight text-center mt-3 mb-5">INICIA SESIÓN</h1>
                 <form class="mb-5" action="validacion.php" method="POST">
                    <div class="mb-4">
                      <label for="exampleInputEmail1" class="form-label font-weight">Ingresa tu ID</label>
                      <input type="text" class="form-control bg-dark-x border-0" id="exampleInputEmail1" required autofocus name="id_usuario" placeholder="Ingresa tu email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label font-weight">Contraseña</label>
                      <input type="password" class="form-control bg-dark-x border-0 mb-2" placeholder="Ingresa tu contraseña" required name="clave" id="exampleInputPassword1">
                      <a href="" id="emailHelp" class="text-light form-text text-decoration-none">¿Has olvidado tu contraseña?</a>
                   
                    </div>
                    <!--<button type="submit" class="btn btn_iniSes w-100" href="principal.html">Iniciar sesión</button>-->
                   <!-- <a type="submit" class="btn btn_iniSes w-100" type="submit">Iniciar sesión</a>-->
                    <button class="btn btn_iniSes w-100" type="submit">Iniciar sesión</button>
                  </form>
                  <center>
                    <p class="text-light text-center font-weight text-decoration-none mb-0">¿Aun no tienes cuenta?</p> <a href="registro.php" class="text-light text-center font-weight">Crea una ahora</a>
                  </center>
                    </div>
            </div>
        </div>
      </section>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Integradora &copy; Sistema Encuestas</div>
                    <div>
                        <a href="#">Poll´s System</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>