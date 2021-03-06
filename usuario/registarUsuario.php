<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sale Cake App</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
   
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
 <div class="mian-content">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo text-left">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                            <img src="../images/logo.png" alt="" class="img-fluid">Dulce Mania De Lucky</a>
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
                            <a class="nav-link" href="../proveedor/listaProveedor.php">Proveedores</a>
                        </li>
                      <li class="nav-item">
                            <a class="nav-link" href="../reporte.php">Reportes</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>    
            </nav>
        </header>
        <!-- //header -->

        <!-- banner 2 -->
        <div class="banner2-w3ls">

        </div>
        <!-- //banner 2 -->
    </div>
    <!-- main -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="inicio.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Registrar Usuario</li>
            </ol>
        </nav>
    </div>
   <?php 
require '../dao/rolDao.php';
require '../dto/rolDto.php';
require '../conexion/Conexion.php';

$rolDao = new rolDao();
?>  

<div class="container">
<form action="../controlador/controladorUsuario.php" method="POST">
    <div class="col-md-12" >
        <center><h2 style="color: #f59ea8; padding: 10px;">Registrar Usuario</h2></center>
    </div>

    <div class="form-group col-md-12">
    <label class="col-sm-2 col-form-label">Documento:</label>
    <input type="text" name="idUsuario" class="form-control">   
    </div>
    <div class="form-group col-md-12">
    <label>Nombre:</label>
    <input type="text" name="nombres" class="form-control"> 
    </div>
    <div class="form-group col-md-12">
    <label>Apellidos:</label>
    <input type="text" name="apellidos" class="form-control">   
    </div>
    <div class="form-group form-control-lg">
    <label>Rol:</label>
    <select name="idRol" >
        <option value="0">Seleccione:</option>
        <?php
         $rol = $rolDao->listarRol();
         foreach ($rol as $r) {?>
            <option class="form-control" value="<?php echo $r['idRol']?>"><?php echo $r['tipoRol']?></option>
         <?php }?>
    </select>   
    </div>
    <div class="form-group col-md-12">
    <label>Contraseña</label>
    <input type="password" name="clave" class="form-control">   
    </div>
     <center><button class="btn-ingresar" type="submit" name="registro" id="registro"><img src="../img/botonTorta.png" width="40" height="40"/>Registrar</button></center>
</form> 
</div>

    <script src="../js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!-- gallery -->
    <script src="../js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
    
    <script src="../js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>