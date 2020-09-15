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
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/estilos.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="./css/fontawesome-all.css">
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
require './dao/rolDao.php';
require './dto/rolDto.php';
require './conexion/Conexion.php';

$rolDao = new rolDao();
?>  

<div class="container">
<form action="./controlador/controladorUsuario.php" method="POST">
    <div class="col-md-12" >
        <center><h2 style="color: #f59ea8; padding: 10px;">Registrar Usuario</h2></center>
    </div>

    <div class="form-group col-md-12">
    <label class="col-sm-2 col-form-label">Documento:</label>
    <input  type="number" name="idUsuario" class="form-control" min="1000000" required>   
    </div>
    <div class="form-group col-md-12">
    <label>Nombre:</label>
    <input type="text" name="nombres" class="form-control" minlength="3" required> 
    </div>
    <div class="form-group col-md-12">
    <label>Apellidos:</label>
    <input type="text" name="apellidos" class="form-control" minlength="3" required>   
    </div>
    <div class="form-group col-md-12">
    <label>Contraseña</label>
    <input type="password" name="clave" class="form-control" minlength="8" required>   
    </div>
    <div class="form-group form-control-lg">
    
    <div class="form-group col-md-12">
    <input  type="text" name="idRol" class="form-control invisible" value=3>   
    </div>
    
    
     <center><button class="btn-ingresar" type="submit" name="registro1" id="registro1"><img src="./img/botonTorta.png" width="40" height="40"/>Registrar</button></center>
 
</form> 
</div>

    <script src="./js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!-- gallery -->
    <script src="./js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="./css/chocolat.css" type="text/css" media="screen">
    
    <script src="./js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>
