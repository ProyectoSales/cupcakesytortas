<?php
require '../dao/insumoDao.php';
require '../dto/insumoDto.php';
require '../conexion/Conexion.php';

if (isset($_POST['registrar'])) {
	$insuDao = new insumoDao();
	$insuDto = new insumoDto();

	//$nombreImg=$_FILES['file_url']['name'];
    //$archivo=$_FILES['file_url']['tmp_name'];
    //$ruta="../img/insumos";
    
    //$ruta=$ruta."/".$nombreImg;

    //move_uploaded_file($archivo, $ruta);

	$insuDto->setNombreInsumo($_POST['nombreInsumo']);
	$insuDto->setPrecio($_POST['precio']);
	$insuDto->setDescripcion($_POST['descripcion']);
	//$insuDao->setCantidad($_POST['cantidad']);
	//$insuDto->setImagen($ruta);

	//$mensaje = $insuDao->registrarInsumo($insuDto);

	$valideInsu = $insuDao->validarInsumo($insuDto);
	//echo ($valideInsu);
	$arrayinsu = $valideInsu[0][0];

	//echo($arrayinsu);
	if (empty($arrayinsu)) {
		$mensaje = $insuDao->registrarInsumo($insuDto);

		//$insuDao->setCantidad($_POST['cantidad']);
	
		//$mensaje = $insuDao->registrarInsumo($insuDao);

		echo '<script>';
		echo 'setTimeout(function () { 
			swal({
			  title: "Producto Registrado exitoso!",
			  
			  type: "success",
			  confirmButtonText: "OK"
			},
			function(isConfirm){
			  if (isConfirm) {
				window.location.href = "../insumos/listaInsumo.php?";
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
				window.location.href = "../insumos/registroInsumo.php?";
			  }
			}); }, 100);';
		echo '</script>';
	}


	//header("Location: ../insumos/listaInsumo.php?mensaje=".$mensaje);

}elseif (isset($_POST['editar'])) {
	$insuDao = new insumoDao();
	$insuDto = new insumoDto();

	$insuDto->setNombreInsumo($_POST['nombreInsumo']);
	$insuDto->setStock($_POST['stock']);

	$mensaje = $insuDao->modificarInsumo($insuDto);

    header("Location: ../insumos/listaInsumo.php?mensaje=".$mensaje);
}elseif(isset($_GET['id'])){
   	$insuDao = new insumoDao();
    
    $mensaje=$insuDao->eliminarInsumo($_GET['id']);
	echo '<script>alert("Usuario o Contraseña Incorrectos");</script>';
	echo '<script> window.location="login.php"</script>';
   	header("Location: ../insumos/listaInsumo.php?mensaje=".$mensaje);
}

echo '<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

?>