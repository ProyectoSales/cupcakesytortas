<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sale Cake App</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Cakes Bakery Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <!-- Style-CSS -->
    <link rel="stylesheet" href="../css/fontawesome-all.css">
   

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
                            <a class="nav-link" href="../proveedor.php">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               Insumos
                            </a>
                            <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item scroll" href="registroInsumo.php">Registrar Insumos</a>
                               <a class="dropdown-item scroll" href="listaInsumo.php" title="">Lista Insumos</a>
                                <a class="dropdown-item scroll" href="../solicitud/listaSolicitud.php" title="">Lista Solicitudes</a>
                            </div>
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
                <li class="breadcrumb-item active" aria-current="page">Lista Insumo</li>
            </ol>
        </nav>
    </div>
    <!-- //page details -->
<?php
require '../dao/insumoDao.php';
require '../dto/insumoDto.php';
require '../conexion/Conexion.php';
 $insuDao = new insumoDao();
?>
<div style="padding-top: 40px;" class="container">
    <div class="col-md-12" >
        <center><h2 style="color: #f59ea8; padding: 10px;">Lista Insumos</h2></center>
    </div>
    <table class="table table-striped table-bordered">
    <thead>
        <th>Id Insumo</th>
        <th>Nombre Insumo</th>
        <th>Stock</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php
         $insumo=$insuDao->listarInsumo();
         foreach ($insumo as $insuDao) {?>
            <tr>
            <td><?php echo $insuDao["idInsumo"]?></td>
            <td><?php echo $insuDao["nombreInsumo"]?></td>
            <td><?php echo $insuDao["precio"]?></td>
            <td><a href="editarInsumo.php?idInsumo=<?php echo $insuDao['idInsumo'];?>"><img src="../img/editar.png" width="35" height="35"></a>
            <a href="../controlador/controladorInsumo.php?id=<?php echo $insuDao['idInsumo'];?>" onclick="return confirmar();"><img src="../img/deleteP.png" width="35" height="35"></a>
            </td>
            </tr>
         <?php }?>
    </tbody>
</table>
</div>
        
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