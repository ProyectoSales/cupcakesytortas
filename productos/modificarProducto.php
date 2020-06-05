<!DOCTYPE html>
<html>
<head>
	<title>Modificar Producto</title>
</head>
<body>
<?php
require '../dao/productoDao.php';
require '../dto/productoDto.php';
require '../conexion/Conexion.php';
if ($_GET['idProducto']!=NULL) {
	$prodDao = new productoDao();
	$producto = $prodDao->obtenerProducto($_GET['idProducto']);
}
?>
<h1>Modificar Producto</h1>
<form action="../controlador/controladorProducto.php" method="POST">
	<label>Nombre Producto</label>
	<input type="text" name="nombreProducto" class="form-control" required value="<?php echo $producto['nombreProducto'];?>">
	<label>Cantidad</label>
	<input type="text" name="cantidad" required value="<?php echo $producto['cantidad']?>">
	<label>Precio</label>
	<input type="text" name="cantidad" required value="<?php echo $producto['precio'];?>">
	<input type="submit" name="editar" id="editar" value="Editar">
</form>
</body>
</html>