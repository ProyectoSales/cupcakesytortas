<?php
require '../dao/insumoDao.php';
require '../dto/insumoDto.php';
require '../conexion/Conexion.php';

if (isset($_POST['registrar'])) {
	$insuDao = new insumoDao();
	$insuDto = new insumoDto();

	$insuDto->setNombreInsumo($_POST['nombreInsumo']);
	$insuDto->setStock($_POST['stock']);

	$mensaje = $insuDao->registrarInsumo($insuDto);

	header("Location: ../insumos/listaInsumo.php?mensaje=".$mensaje);
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
?>