<?php 
require_once("./connection.php");


    $where = "";

    if(!empty($_POST)){
        $valor = $_POST['fechaIni'];
        $valorB = $_POST['fechaFinal'];
        if(!empty($valor)){
            $where = "where fechaini >= '$valor' and fechafin <='$valorB'";
        } 
    }
       



?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Reporte de ventas</title>

		<style type="text/css">
#container {
    height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

		</style>
	</head>
	<body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../../code/highcharts.js"></script>
<script src="../../code/highcharts-more.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/fontawesome-all.css">
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
                            <a class="nav-link" href="administrador.php" id="exampleModal">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Usuarios
                            </a>
                            <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="usuario/registarUsuario.php">Registrar Usuarios</a>
                                <a class="dropdown-item scroll" href="usuario/listaUsuario.php" title="">Lista Usuarios</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proveedor/listaProveedor.php">Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reporte.php">Reportes</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>    
            </nav>
        </header>
        <!-- //header -->

        <!-- banner 2 -->
        <div class="banner2-w3ls">

        </div>

            <div class="breadcrumb-agile">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="inicio.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Reportes</li>
            </ol>
        </nav>
    </div>
        <!-- //banner 2 -->
    </div>


<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        
    </p>

    <button id="plain">Plano</button>
    <button id="inverted">Invertido</button>
    <button id="polar">Polar</button>

<br>
<br>
<br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"> 
                     <div class="col-md-12" >
                        <center><h2 style="color: #f59ea8; padding: 10px;">Ventas</h2></center>
                    </div>
                    <label for="">Desde:</label>
                    <input type="date" name="fechaIni">
                    <lable for="">Hasta:</lable>
                    <input type="date" name="fechaFinal">
                    <input type="submit" value="Generar grafica" name="submit">
            </form>



<br/>
<table style="HEIGHT:100%;WIDTH:100%;text-align:center;" border=1>
<tr>

<td><h4>Producto</h4></td>
<td><h4>Cantidad</h4></td>
<td><h4>Fecha desde</h4></td>
<td><h4>Fecha hasta</h4></td>
</tr>
<?php
        $sql = "SELECT * FROM paginas_vistas $where";
        $result = mysqli_query($connection,$sql);
        while ($registros = mysqli_fetch_array($result))
        {
        ?>
<tr>

<td><?php echo $registros['producto']?></td>
<td><?php echo $registros['cantidad']?></td>
<td><?php echo $registros['fechaini']?></td>
<td><?php echo $registros['fechafin']?></td>
</tr>

<?php

        }

?>
</table>

</figure>

 <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!-- gallery -->
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    
    <script src="js/bootstrap.js"></script>
		<script type="text/javascript">
var chart = Highcharts.chart('container', {

    title: {
        text: 'Reportes'
    },

    subtitle: {
        text: ''
    },

   


    xAxis: {

        categories: 

        [
        <?php
       
        $sql = "SELECT * FROM paginas_vistas $where";
        $result = mysqli_query($connection,$sql);
        while ($registros = mysqli_fetch_array($result))
        {
        ?>
          '<?php echo $registros ["producto"] ?>',
        <?php
        }
        ?>
        ]

        
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data:[
        <?php
         
        $sql = "SELECT * FROM paginas_vistas $where";
        $result = mysqli_query($connection,$sql);
        while($registros = mysqli_fetch_array($result))
        {
        ?>

            <?php echo $registros ["cantidad"] ?>,
        <?php
        }
        ?>   
        ]
        
    }]
    

});




$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});

		</script>
	</body>
</html>
