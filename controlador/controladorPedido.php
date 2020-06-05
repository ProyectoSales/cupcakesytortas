<?php
require '../dao/productoDao.php';
require '../dto/productoDto.php';
require '../dao/pedidoDao.php';
require '../dto/pedidoDto.php';
require '../dao/categoriaDao.php';
require '../dto/pedido_has_productoDto.php';
require '../dto/pedido_has_estadoDto.php';
require '../dao/datosPedidoDao.php';
require '../dto/datosPedidoDto.php';
require '../login.php';
if (isset($_POST['btn-comprar'])) {
	$pedDao = new pedidoDao();
	$pedDto = new pedidoDto();
	$catDao = new categoriaDao();

	$prodDao = new productoDao();
	$pedprodDto = new pedido_has_productoDto();
	$pedEstDto = new pedido_has_estadoDto();

	$siguiente  = ($pedDao->obtenerSiguientePedido()['siguiente'])+1;
    $pedDto->setIdPedido($siguiente);
	$pedDto->setIdUsuario($_SESSION["usuario"]);
	//$pedDto->setIdUsuario(1234);
	$pedDto->setEstado(2);
	$mensaje=$pedDao->registrarPedido($pedDto);   

    $pedEstDto->setPedido_idPedido($siguiente);
    $pedEstDto->setEstados_idEstados('2');
    $mensaje=$pedDao->registrarPedido_Estado($pedEstDto); 
	
	$categorias = $catDao->listarCategoria();
foreach ($categorias as $c) {
    if (isset($_POST["check-".$c['idCategoria']])) {
		if (isset($_POST['radios-'.$c['idCategoria']])) {
		$radio = $_POST['radios-'.$c['idCategoria']];
		$idProducto = explode("-", $radio)[0];
		$pedprodDto->setPedido_idPedido($siguiente);
		$pedprodDto->setproductos_idProducto($idProducto);
		$pedDao->registrarPedido_Producto($pedprodDto) .$idProducto; 
		}
	}
}

//header("Location: ../pedido/listaPedido.php?mensaje=".$mensaje);
//header("Location: ../pedido/datosPedido.php?idPedido=".$siguiente);	
 header("Location: ../pedido/datosPedido.php?idPedido=".$siguiente);	
}elseif (isset($_POST['btn-guardar'])) {
	$datosPedDto = new datosPedidoDto();
	$datosPedDao = new datosPedidoDao();
    $datosPedDto->setIdPedido($_POST["idPedido"]);
    $datosPedDto->setDireccion($_POST["direccion"]);
    $datosPedDto->setTelefono($_POST["telefono"]);
    $datosPedDto->setFecha($_POST["fecha"]);
    $datosPedDto->setIdUsuario($_SESSION["usuario"]);
    $datosPedDto->setCiudad($_POST["ciudad"]);
    $datosPedDto->setBarrio($_POST["barrio"]);
    $mensaje=$datosPedDao->registrarDatosPedido($datosPedDto);
    echo '<script> window.location="../pedido/listaPedido.php"; </script>';
    //file("../pedido/listaPedido.php?mensaje=".$mensaje);
}

  //  header("Location: ../pedido/listaPedido.php?mensaje=".$mensaje);
?>