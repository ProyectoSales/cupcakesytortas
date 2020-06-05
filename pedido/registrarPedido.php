<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registrar Pedido</title>
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
  
<?php
require '../dao/productoDao.php';
require '../dao/categoriaDao.php';
require '../conexion/Conexion.php';
$prodDao = new productoDao();
$cateDao = new categoriaDao();
?>  

<div class="col-md-12">
<center><h1 style="color: #f59ea8; padding: 10px;">Crea tu Cupcake o Torta</h1></center>
</div>

<form action="../controlador/controladorPedido.php" method="POST">
<div class="col-md-12"  style="display:flex; overflow-x: hidden;">
<div class="col-md-8" style="display: flex; flex-wrap: wrap;">
<div class="col-md-12 row" style="background-color:#f59ea8; margin:0; color: #fff;">
<h2 class="text-center col-md-12" >Ingredientes</h2>
</div>
<div id="contenido-ingredientes" style="width: 100%; display:flex; flex-wrap: wrap;"> 
<?php
        $categorias = $cateDao->listarCategoria();
        foreach ($categorias as $lc) {
          ?>
          <div class="col-md-6 row" style="border: 1px solid #f59ea8; margin:0;">
          
          <label class="col-md-12 row" for="<?php echo 'check-'.$lc["idCategoria"]?>" style="display: flex;align-items: center;justify-content: space-between;">
          <h4 class="col-md-10" style="color: #f59ea8;"><?php echo $lc["tipoCategoria"]?></h4>
          <input style="float:right;" type="checkbox" name="<?php echo 'check-'.$lc["idCategoria"]?>" onChange="<?php echo 'colocarImgIngrediente('.$lc["idCategoria"].','.$lc["tipoCategoria"].',true)'?>" id="<?php echo 'check-'.$lc["idCategoria"]?>">
          </label>
          <div class="col-md-12 row">
          <table class="col-md-12">
          <tbody>
          <?php  
          $contProd = 0;
$productos= $prodDao->listaProductosXCategoria($lc["idCategoria"]);
foreach ($productos as $prod) {?>
<tr>
<td style="width:60%"><img src=<?php echo $prod["imagen"]?> height="25" width="25">&nbsp;<?php echo $prod["nombreProducto"]?></td>
<td style="width:37%"><?php echo $prod["precio"]?> </td>
<td style="width:3%"><input type="radio" id="<?php echo 'radio-'.$prod["idProducto"]?>" name="<?php echo 'radios-'.$lc["idCategoria"]?>" onChange="<?php echo 'colocarImgIngrediente('.$lc["idCategoria"].','.$lc["tipoCategoria"].', false)'?>" value="<?php echo $prod["idProducto"].'-'.$prod["imagen"].'-'.$prod["precio"]?>" <?php if($contProd == 0){echo "checked";} ?>></td>
</tr>
      
    
     
<?php $contProd++; }?>
          </tbody>
          </table>
          
          </div>
          </div> 
          <?php       
        }

        ?>
</div>
</div>

<div class="col-md-4" style="padding: 0">
<div class="col-md-12" style="display:flex;">
<div class="col-md-6">
<center>
<a class="btns-shadow" type="button" id="btn-cupcake" onclick="colocarImgCup('cupcake')"><img src="../img/botonCupcake.png" width="105" height="105"/>
<center>Cupcake</center></a>
</center>
 
</div>
<div class="col-md-6">
<center>
<a class="btns-shadow" type="button" id="btn-torta" onclick="colocarImgTor('torta')"><img src="../img/botonTorta.png" width="105" height="105"/>
<center>Torta</center></a>
</center>
</div>
<div class="col-md-12" style="position: absolute; top:140px;">
  <center><p>Recuerda que los cupcakes tienen un precio inicial de $900 y debes escoger al menos un ingrediente.</p>
</center>
</div>
</div>
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
<!--<div class="col-md-12">
<div id="contenido" style="border-style: solid; border-color: green; height: 500px;">
  <div id="contenido">
    <div id="torta" style="display:none;"> 
      <img src="" width="100" height="100" class="frutas" />
    </div>
    
  </div>
</div>
-->
<div class="col-md-12" style="position: absolute; bottom:0; display:flex;">
<div class="col-md-6"style="display:flex; justify-content: space-between; align-items: center;">
<b>Costo:</b>
<div>
$ <label for="" id="precio" name="precio" style="margin-bottom:0">0</label>
</div>
</div>
<div class="col-md-6">
<center><button type="submit" id="btn-comprar" name="btn-comprar" class="btn-block" style="display:none">Comprar</button></center>
</div>
</div>
</div>
</div>
    </form>

</body>
  <script src="../js/main.js"></script>
</html>