<?php
require '../dao/productoDao.php';
require '../dto/productoDto.php';
require '../dto/producto_categoriaDto.php';
require '../dao/categoriaDao.php';
require '../dto/categoriaDto.php';
require '../conexion/Conexion.php';

if (isset($_POST['registrar'])) {
	$prodDao = new productoDao();
	$prodDto = new productoDto();

    $categoria = new categoriaDao();
	$prodcatDao = new producto_categoriaDto();
    
    $nombreImg=$_FILES['file_url']['name'];
    $archivo=$_FILES['file_url']['tmp_name'];
    $ruta="../img/ingredientes";
    
    $ruta=$ruta."/".$nombreImg;

    move_uploaded_file($archivo, $ruta);
    
    $siguiente  = ($prodDao->obtenerSiguienteProducto()['siguiente'])+1;
    $prodDto->setIdProducto($siguiente);
	$prodDto->setNombreProducto($_POST['nombreProducto']);
	$prodDto->setCantidad($_POST['cantidad']);
	$prodDto->setPrecio($_POST['precio']);
	$prodDto->setImagen($ruta);
   

	$mensaje = $prodDao->registrarProducto($prodDto);

	$prodcatDao->setIdProducto($siguiente);
	$prodcatDao->setIdCategoria($_POST['idCategoria']);
	$prodcatDao->setEstado($_POST['estado']);

	$mensaje = $prodDao->registrarProductoCategoria($prodcatDao);

	header("Location: ../productos/listarProducto.php?mensaje=".$mensaje);
}
elseif (isset($_POST['editar'])) {
	$prodDao = new productoDao();
	$prodDto = new productoDto();

	$prodDto->setNombreProducto($_POST['nombreProducto']);
	$prodDto->setCantidad($_POST['cantidad']);
	$prodDto->setPrecio($_POST['precio']);

	$mensaje = $prodDao->editarProducto($prodDto);

	header("Location: ../productos/listarProducto.php?mensaje=".$mensaje);
}
?>