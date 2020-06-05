<?php
require '../dao/solicitudDao.php';
require '../dto/solicitudDto.php';
require '../dao/insumoDao.php';
require '../dto/insumoDto.php';
require '../dto/solicitud_insumoDto.php';
require '../login.php';

if (isset($_POST['registrar'])) {
	
	$solDao = new solicitudDao();
	$solDto = new solicitudDto();

	$insuDao = new insumoDao();
	$solinsuDto = new solicitud_insumoDto();

    $siguiente  = ($solDao->obtenerSiguienteSolicitud()['siguiente'])+1;
    $solDto->setIdSolicitud($siguiente);
	$solDto->setIdUsuario($_SESSION["usuario"]);
	$solDto->setDescripcion($_POST["descripcion"]);

	$mensaje=$solDao->registrarSolicitud($solDto);

	$insumos = $insuDao->listarInsumo();
	foreach ($insumos as $i) {
		$cantidad = $_POST[$i['idInsumo']];
		if ($cantidad>0) {
			$solinsuDto->setSolicitudIdSolicitud($siguiente);
			$solinsuDto->setInsumosIdInsumo($i['idInsumo']);
			$solinsuDto->setCantidad($cantidad);
			$solDao->registrarSolicitud_Insumo($solinsuDto);
		}
	}
    echo '<script> window.location="../solicitud/listaSolicitudP.php"; </script>';
	//header("Location: ../solicitud/listaSolicitudP.php?mensaje=".$mensaje);
}

?>