<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registrar Pedido</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../css/fontawesome-all.css">
  <script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script  src="../js/filesaver.js" type="text/javascript"></script>
  <script src="../js/html2canvas.js" type="text/javascript" ></script>
  <script type="text/javascript">
    $(function() { 
      $("#crearimagen").click(function() { 
        html2canvas($("#contenido"), {
          onrendered: function(canvas) {
            theCanvas = canvas;
            document.body.appendChild(canvas);

                      /*
                      canvas.toBlob(function(blob) {
                        saveAs(blob, "Dashboard.png"); 
                      });
                      */
                    }
                  });
      });
    }); 
  </script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
</head>
<body>
 <div class="mian-content">
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
                            <a class="nav-link" href="" id="exampleModal">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedido/registrarPedido.php">Crear Tu Postre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedido/listaPedido.php">Listar Pedidos</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
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
  <script src="../js/main.js"></script>
  <?php
  require '../dao/productoDao.php';
  require '../dao/categoriaDao.php';
  require '../conexion/Conexion.php';
  $prodDao = new productoDao();
  $cateDao = new categoriaDao();
  $identifiPed = $_GET["idPedido"];
  ?>  
  <form action="../controlador/controladorPedido.php" method="POST">
    <div class="col-md-12"  style="display:flex; overflow-x: hidden; min-height: 80vh;">
      <div class="col-md-8" style="display: flex; flex-wrap: wrap;">
        <div class="col-md-12">
        <center><h2 style="color: #f59ea8; padding: 3px;">Datos Comprador</h2></center>
        </div>
  <div  class="col-md-12">
    <!--FORMULARIO DATOS COMPRADOR-->
    <input style="display: none;" type="text" name="idPedido" value="<?php echo $_GET["idPedido"];?>"/>
    <!--<label>Nombre Usuario:</label>-->
    <div class="form-group">
    <label>Dirección:</label>
    <input type="text" name="direccion" class="form-control col-md-6">
    </div>
    <div class="form-group">
    <label>Ciudad:</label>
    <input type="text" name="ciudad" class="form-control col-md-6">
    </div>
    <div class="form-group">
    <label>Barrio:</label>
    <input type="text" name="barrio" class="form-control col-md-6">
    </div>
     <div class="form-group">
    <label>Telefono:</label>
    <input type="text" name="telefono" class="form-control col-md-6">
    </div>
    <div class="form-group">
    <label>Fecha:</label>
    <input type="text" name="fecha" placeholder="YY/MM/DD" class="form-control col-md-6">
    </div>
  </div>
      </div>
      
        <div class="col-md-4" style="padding: 0; min-height: 100%;">
              <div class="col-md-12">
                <!--<div id="contenido" style="border-style: solid; border-color: green; height: 500px;">-->
                  <div id="contenido">
                    <div id="Galletas">
                      <img src="" width="300" height="300" class="frutas">
                    </div>
                    <div id="cupcake" style="display:none;"> 
                      <img src="" width="100" height="100" class="frutas" />
                    </div>
                    <div id="torta" style="display:none;"> 
                      <img src="" width="100" height="100" class="frutas" />
                    </div>
                    <div id="Cremas">
                      <img src="" width="300" height="300" class="frutas"/>
                    </div>
                    <div id="Chocolates">
                      <img src="" width="300" height="300" class="frutas"/>
                    </div>
                    <div id="Frutas"> 
                      <img src="" width="300" height="300" class="frutas"/>
                    </div>
                    <div id="Figuras">
                      <img src="" width="300" height="300" class="frutas">
                    </div>
                    <div id="Capacillo">
                      <img src="" width="500" height="500" class="frutas">
                    </div>
                    <div id="Crema">
                        <img src="" width="300" height="300" class=""/>
                      </div>
                     <div id="Masa">
                        <img src="" width="500" height="500" class="">
                      </div>
                      <div id="Decoracion" style="display:none;"> 
                         <img src="" width="300" height="300" class=""/>
                      </div>
                      <div id="Frases">
                        <img src="" width="300" height="300" class="">
                      </div>
                  </div>
                </div>
                <div class="col-md-12" style="position: absolute; bottom:0; display:flex;">
                  <div class="col-md-6"style="display:flex; justify-content: space-between; align-items: center;">
                    <b>Costo:</b>
                    <div>
                      $ <label for="" id="precio" style="margin-bottom:0">0</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <center><button type="submit" id="btn-guardar" name="btn-guardar" class="btn-block" style="">Guardar</button></center>
                  </div>
                </div>
              </div>
            </div>
          
          <?php
          function isCheckedCategoria($idCategoria, $listCategoria){
            if ($listCategoria != null) {
              foreach ($listCategoria as $cs) {
              if ($cs["idCategoria"] == $idCategoria) {
                return true;
              }
            }
            }
            return false;
          }
          ?>
          </form>
        <div class="col-md-8" style="display: flex; flex-wrap: wrap; display: none;">
        <div class="col-md-12 row" style="background-color:#f59ea8; margin:0; color: #fff;">
          <h2 class="text-center col-md-12" >Ingredientes</h2>
        </div>

        <?php
echo "<script>";
echo "colocarImgCup('cupcake');";
echo "</script>";

        $categoriaSelect= $cateDao->listaCategoriaXPedido($identifiPed);
        $categorias = $cateDao->listarCategoria();
        foreach ($categorias as $lc) {
          ?>
          <div class="col-md-6 row" style="border: 1px solid #f59ea8; margin:0;">
            <label class="col-md-12 row" for="<?php echo 'check-'.$lc["idCategoria"]?>" style="display: flex;align-items: center;justify-content: space-between;">
              <h4 class="col-md-10" style="color: #f59ea8;"><?php echo $lc["tipoCategoria"]?></h4>
              <input style="float:right;" type="checkbox" name="<?php echo 'check-'.$lc["idCategoria"]?>" onChange="<?php echo 'colocarImgIngrediente('.$lc["idCategoria"].','.$lc["tipoCategoria"].',true)'?>" id=<?php echo 'check-'.$lc["idCategoria"]?> <?php if(isCheckedCategoria($lc["idCategoria"], $categoriaSelect)){echo "checked";} ?>>
            </label>
            <div class="col-md-12 row">
              <table class="col-md-12">
                <tbody>
                  <?php  
                  $contProd = 0;
                  $productos= $prodDao->listaProductosXCategoria($lc["idCategoria"]);
                  $producPed= $prodDao->listaProductosXPedido($identifiPed, $lc["idCategoria"]);
                  /*echo $_GET["idPedido"];*/
                  foreach ($productos as $prod) {
                    $isCheckedProducto = $producPed != null && $prod["idProducto"] == $producPed["idProducto"];
                    ?>
                    <tr>
                      <td style="width:60%"><img src=<?php echo $prod["imagen"]?> height="25" width="25">&nbsp;<?php echo $prod["nombreProducto"]?></td>
                      <td style="width:37%"><?php echo $prod["precio"]?> </td>
                      <td style="width:3%"><input type="radio" id="<?php echo 'radio-'.$prod["idProducto"]?>" name="<?php echo 'radios-'.$lc["idCategoria"]?>" onChange="<?php echo 'colocarImgIngrediente('.$lc["idCategoria"].','.$lc["tipoCategoria"].', false)'?>" value="<?php echo $prod["idProducto"].'-'.$prod["imagen"].'-'.$prod["precio"]?>" <?php if($isCheckedProducto){echo "checked";} ?>></td>
                    </tr>

<?php
if($isCheckedProducto){
  echo "<script>";
echo 'colocarImgIngrediente('.$lc["idCategoria"].','.$lc["tipoCategoria"].', true)';
echo "</script>";
 } $contProd++; }?>
                  </tbody>
                </table>

              </div>
            </div> 
            <?php       
          } 

          ?>
        </div>
        <script src="../js/jquery-2.2.3.min.js"></script>
    <link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen"/>
        </body>
        
        </html>