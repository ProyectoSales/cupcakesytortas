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
    

	$prodDto->setNombreProducto($_POST['nombreProducto']);
	$prodDto->setCantidad($_POST['cantidad']);
	$prodDto->setPrecio($_POST['precio']);
	$prodDto->setImagen($ruta);
   
	$valideProducu = $prodDao->validarProducto($prodDto);
	$arrayproduct = $valideProducu[0][0];


	if (empty($arrayproduct)) {
		$siguiente  = ($prodDao->obtenerSiguienteProducto()['siguiente'])+1;
		$prodDto->setIdProducto($siguiente);
		$mensaje = $prodDao->registrarProducto($prodDto);

		$prodcatDao->setIdProducto($siguiente);
		$prodcatDao->setIdCategoria($_POST['idCategoria']);
		$prodcatDao->setEstado($_POST['estado']);
	
		$mensaje = $prodDao->registrarProductoCategoria($prodcatDao);

		echo '<script>';
		echo 'setTimeout(function () { 
			swal({
			  title: "Producto Registrado exitoso!",
			  
			  type: "success",
			  confirmButtonText: "OK"
			},
			function(isConfirm){
			  if (isConfirm) {
				window.location.href = "../productos/listarProducto.php?";
			  }
			}); }, 100);';
		echo '</script>';
	}else{
		echo '<script>';
		echo 'setTimeout(function () { 
			swal({
			  title: "Producto ya existe",
			  
			  type: "warning",
			  confirmButtonText: "OK"
			},
			function(isConfirm){
			  if (isConfirm) {
				window.location.href = "../productos/registrarProducto.php?";
			  }
			}); }, 100);';
		echo '</script>';
	}


	//header("Location: ../productos/listarProducto.php?mensaje=".$mensaje);
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

echo '<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

?>