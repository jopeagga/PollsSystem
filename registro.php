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
    <script language="javascript">
function check()
{
    if(document.form1.nombre.value=="")
  {
    alert("Por favor, escriba su nombre");
	document.form1.nombre.focus();
	return false;
  }

  if(document.form1.apellidos.value=="")
  {
    alert("Por favor, escriba sus apellidos");
	document.form1.apellidos.focus();
	return false;
  }

  if(document.form1.email.value=="")
  {
    alert("Por favor, introduzca su dirección de correo electrónico");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Por favor introduzca un correo electrónico válido");
			document.form1.email.focus();
			return false;
		}

 if(document.form1.id_usuario.value=="")
  {
    alert("Ingrese un ID para su inicio de sesión");
	document.form1.id_usuario.focus();
	return false;
  }
 
 if(document.form1.contrasena.value=="")
  {
    alert("Por favor, introduzca su contraseña");
	document.form1.contrasena.focus();
	return false;
  } 
  if(document.form1.conf_contrasena.value=="")
  {
    alert("Confirme su contraseña");
	document.form1.conf_contrasena.focus();
	return false;
  }
  if(document.form1.contrasena.value!=document.form1.conf_contrasena.value)
  {
    alert("Confirmar contraseña no coincide");
	document.form1.conf_contrasena.focus();
	return false;
  }
        
    if(document.form1.id_tipo_usuario.value=="")
    {
    alert("Por favor, escriba su tipo de usuario");
    document.form1.id_tipo_usuario.focus();
    return false;
    }

  return true;
  }
  
</script>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-dark-tit"><h3 class="text-dark-tit text-center mb-0 text-dark my-4">CREAR CUENTA</h3></div>
                                    <div class="card-body">
                                    <form name="form1" class="mb-5" method="post" action="registo.php" onSubmit="return check();">
                                            <div class="form-row">
                                                <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputFirstName">Nombre(s)</label><input class="form-control py-1" id="nombre" name="nombre" type="text" placeholder="Ingresa tu nombre" /></div>
                                                </div>
                                                <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputLastName">Apellidos</label><input class="form-control py-1" id="apellidos" name="apellidos" type="text" placeholder="Ingresa tus apellidos" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="text-dark small mb-1" for="inputEmailAddress">Correo</label><input class="form-control py-1" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo" /></div>
                                            <div class="form-row">
                                            <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputFirstName">Usuario</label><input class="form-control py-1" id="id_usuario" name="id_usuario" type="text" placeholder="Ingresa tu usuario (Solo numeros)" /></div>
                                                </div>
                                                <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputPassword">Contraseña</label><input class="form-control py-1" id="contrasena" name="contrasena" type="password" placeholder="Ingresa una contraseña" /></div>
                                                </div>
                                                <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputConfirmPassword">Confirma tu contraseña</label><input class="form-control py-1" id="conf_contrasena" name="conf_contrasena" type="password" placeholder="Confirma tu contraseña" /></div>
                                                </div>
                                                <div class="col-md-100">
                                                    <div class="form-group"><label class="text-dark small mb-1" for="inputFirstName">Tipo de usuario</label><input class="form-control py-1" id="id_tipo_usuario" name="id_tipo_usuario" type="text" placeholder="Ingresa tu tipo de usuario (1ADMIN/2USUARIO)" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type="submit" name="Submit" class="btn btn_iniSes btn-block">Registrar</button>
                                            </form>
                                    </div>
                                    <div class="card-footer text-dark-j text-center">
                                        <div class="small"><a href="login.php">¿Ya tienes cuenta? Inicia Sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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