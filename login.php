<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio Sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body>
	 <div class="mian-content">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo text-left">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="" class="img-fluid">Dulce Mania De Lucky</a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-lg-right text-center">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html" >Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               Servicios
                            </a>
                            <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="about.html" title="">Sobre Nosotros</a>
                                <a class="dropdown-item scroll" href="#products" title="">Crea Tu Postre</a>
                                <a class="dropdown-item scroll" href="#news" title="">Productos</a>
                           
                            </div>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>    
            </nav>
        </header>
        <div class="banner2-w3ls">
        </div>
<?php
session_start();
?>
<div class="container">
     <div class="col-md-12" >
        <center><img src="images/logo.png" alt=""><h2 style="color: #f59ea8; padding: 10px;">Bienvenidos!</h2></center>
    </div>
<form method="POST">
    <div class="form-group">
	<label>Documento:</label>
	<input type="text" name="idUsuario" class="form-control">
	  <span class="Error"></span>
	</div>
	 <div class="form-group">
	<label>Contraseña:</label>
	<input type="password" name="clave" class="form-control">
	  <span class="Error"></span>
	</div>
	<div class="form-group col-md-6">
	<center><button class="btn-ingresar" type="submit" name="ingresar"><img src="img/botonCupcake.png" width="40" height="40"/>Iniciar</button></center>
	</div>
</form>

</div>

<?php
require 'conexion/Conexion.php';
$cnn=Conexion::getConexion();
if (isset($_POST['ingresar'])) {
	$documento = $_POST['idUsuario'];
	$contrasena =$_POST['clave'];
	
	$log=$cnn->prepare('SELECT idUsuario,clave,idRol FROM usuarios WHERE idUsuario=? AND clave=?');
	$log->bindParam(1,$documento);
	$log->bindParam(2,$contrasena);
	$log->execute();
	$row=$log->fetch();
	if ($row!=null) {
		if($_SESSION["usuario"]=$row['idUsuario']){
			if ($_SESSION["rol"]=$row['idRol']==1) {
				header("Location: administrador.php");
			}else if ($_SESSION["rol"]=$row['idRol']==2){
				header("Location: empleado.php");
			}else if($_SESSION["rol"]=$row['idRol']==3){
				header("Location: cliente.php");
			}else if ($_SESSION["rol"]=$row['idRol']==4) {
				header("Location: proveedor.php");
			}
		}else{
			echo '<script>alert("Usuario o Contraseña Incorrectos")</script>';
		}
	}else{
		echo '<script>alert("Usuario o Contraseña Incorrectos");</script>';
		echo '<script> window.location="login.php"</script>';
	}
}
?>
</body>
</html>