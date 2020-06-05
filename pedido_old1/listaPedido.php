<!DOCTYPE html>
<html>
<head>
	<title>Listado Pedido</title>
	<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/bootstrap.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script></head>
<body>
<?php
	require '../dao/pedidoDao.php';
	require '../conexion/Conexion.php';
	$pediDao = new pedidoDao();
	$pedidos = $pediDao->listarPedidoUsuarios();
	$productosped = $pediDao->listarPedidoProductos();
?>
<div class="col-md-12">
<center><h1 style="color: #f59ea8; padding: 10px;">Listado pedidos</h1></center>
</div>
<div class="col-md-12"style="display:flex;">
<div class="col-md-6" style="margin:auto;">
<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Usuario</th>
			<th>Apellidos</th>
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