<!DOCTYPE html>
<html>
<head>
	<title>Registrar Solicitud</title>
</head>
<body>
<?php
require '../dao/insumoDao.php';
require '../dto/insumoDto.php';
require '../conexion/Conexion.php';
if ($_GET['idInsumo']!=NULL) {
	$insuDao = new insumoDao();
	$insumo = $insuDao->obtenerInsumo($_GET['idInsumo']);
}
?>	
<h1>Modificar Solicitud</h1>
<form action="../controlador/controladorSolicitud.php" method="POST">
<label>Descripción</label>
<input type="text" name="descripcion" required-class="<?php echo $insuDao['descripcion']?>">
<label>Cantidad</label>
<input type="text" name="cantidad" required-class="<?php echo $insuDao['cantidad']?>">	
<input type="submit" name="editar" id="editar" value="Editar">
</form>
</body>
</html>