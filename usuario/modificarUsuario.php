<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <link href="../css/login_overlay.css" rel='stylesheet' type='text/css' />

        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/estilos.css" type="text/css" media="all" />

        <!-- Style-CSS -->
        <link rel="stylesheet" href="../css/fontawesome-all.css">
    	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    	<link rel="stylesheet" href="../css/bootstrap.css">
      	<link rel="stylesheet" href="../css/bootstrap-theme.css">
</head>
<body>
	 <div class="mian-content">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="logo text-left">
                        <h1>
                            <a class="navbar-brand" href="index.html">
                                <img src="../images/logo.png" alt="" class="img-fluid">Dulce Mania de Lucky</a>
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
                            <a class="nav-link" href="../administrador.php" id="exampleModal">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Usuarios
                            </a>
                            <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="registarUsuario.php">Registrar Usuarios</a>
                                <a class="dropdown-item scroll" href="listaUsuario.php" title="">Lista Usuarios</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../proveedor/listaProveedor.php">Lista Proveedores</a>
                        </li>
                       
                    </ul>
                </div>    
            </nav>
        </header>
    </div>
<?php
require '../dao/usuarioDao.php';
require '../dto/usuarioDto.php';
require '../conexion/Conexion.php';
if ($_GET['idUsuario']!=NULL) {
	$usuDao = new usuarioDao();
	$Usuario = $usuDao->obtenerUsuario($_GET['idUsuario']);
}
?>
<div style="padding-top: 110px;" class="container">
 <div class="col-md-12" >
		<center><h3 style="color: #f59ea8; padding: 10px;">Editar Usuario</h3></center>
	</div>
 <form action="../controlador/controladorUsuario.php" method="POST">
 	<div class="form-group col-md-4">
	<label>Documento:</label>
	<input type="text" name="idUsuario" class="form-control" required value="<?php echo $Usuario['idUsuario'];?>">
	</div>
	<div class="form-group col-md-4">
	<label>Nombre:</label>
	<input type="text" name="nombres" class="form-control" required value="<?php echo $Usuario['nombres'];?>">
	</div>
	<div class="form-group col-md-4">
	<label>Apellidos:</label>
	<input type="text" name="apellidos" class="form-control" required value="<?php echo $Usuario['apellidos'];?>">
	</div>
	<div class="form-group col-md-4">
	<label>Rol:</label>
	<input type="text" name="idRol" class="form-control" required value="<?php echo $Usuario['idRol'];?>">
	</div>
	<div class="form-group col-md-4">
	<label>Contraseña:</label>
	<input type="text" name="clave" class="form-control" required value="<?php echo $Usuario['clave']?>">
	</div>
	<input type="submit" class="btn btn-primary" id="editar" name="editar" value="Editar">
</form>	
</div>

 <script src="../js/jquery-3.5.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
</body>
</html>