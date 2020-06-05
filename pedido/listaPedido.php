<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <title>Sale Cake App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="../css/fontawesome-all.css" type="text/css" media="all"/>
</head>

<body>
 <div class="mian-content">
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
                            <a class="nav-link" href="../cliente.php" id="exampleModal">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarPedido.php">Crear Tu Postre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listaPedido.php">Listar Pedidos</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>    
            </nav>
        </header>
        <div class="banner2-w3ls">
        </div>
        <div class="breadcrumb-agile">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="inicio.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cliente</li>
            </ol>
        </nav>
    </div>
    </div>
<?php
    require '../dao/pedidoDao.php';
    require '../conexion/Conexion.php';
    $pediDao = new pedidoDao();
    $pedidos = $pediDao->listarPedidoUsuarios();
    $productosped = $pediDao->listarPedidoProductos();
?>
<div class="col-md-12">
<!--<center><h2 style="color: #f59ea8; padding: 10px;">Listado pedidos</h2></center>-->
</div>
<div class="col-md-12"style="display:flex;">
<div class="col-md-6" style="margin:auto;">
<table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Usuario</th>
            <th>Apellidos</th>
            <th>Fecha Entrega</th>
            <th>Estado</th>
            <th>Opciones</th>
        </thead>
        <tbody>
        <?php
        foreach ($pedidos as $lp) {
        ?>
        <tr>
        <td><?php echo $lp["idPedido"]?></td>
        <td><?php echo $lp["nombres"]?></td>
        <td><?php echo $lp["apellidos"]?></td>
        <td><?php echo $lp["fecha"]?></td>
        <td>Pendiente</td>
        <td><a type="button" href="visualizacionPedido.php?idPedido=<?php echo $lp['idPedido'];?>"><img src="../img/lupa.png" width="35" height="35"></a>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>


</body>

</html>