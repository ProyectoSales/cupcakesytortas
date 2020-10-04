<?php
require '../dto/usuarioDto.php';
require '../dao/usuarioDao.php';
require '../conexion/Conexion.php';

if (isset($_POST['registro']) or isset($_POST['registro1'] )) {
	$usuDao= new usuarioDao();
	$usuDto= new usuarioDto();

	$usuDto->setIdUsuario($_POST['idUsuario']);
	$usuDto->setNombreUsuario($_POST['nombres']);
	$usuDto->setApellidoUsuario($_POST['apellidos']);
	$usuDto->setIdRol($_POST['idRol']);
	$usuDto->setClave($_POST['clave']);
	$usuDto->setCorreo($_POST['correo']);

	
	$valideUser = $usuDao->obtenerUsuario($_POST['idUsuario']);
	
	
	
	
	echo $valideUser[0];
	if (empty($valideUser[0])) {
		$mensaje = $usuDao->registrarUsuario($usuDto);
		if (isset($_POST['registro'])){	
			header("Location: ../usuario/listaUsuario.php?mensaje=".$mensaje);
		}
		else {
			
			
			echo '<script>';
			echo 'setTimeout(function () { 
				swal({
				  title: "Registro exitoso!",
				  
				  type: "success",
				  confirmButtonText: "OK"
				},
				function(isConfirm){
				  if (isConfirm) {
					window.location.href = "./../login.php";
				  }
				}); }, 100);';
			echo '</script>';
		}
	} else  {
			
		echo '<script>';
		echo 'setTimeout(function () { 
			swal({
			  title: "Usuario ya existe",
			  
			  type: "success",
			  confirmButtonText: "OK"
			},
			function(isConfirm){
			  if (isConfirm) {
				window.location.href = "./../login.php";
			  }
			}); }, 100);';
		echo '</script>';

		
	  
	}


}elseif (isset($_POST['registrarse'])) {
	$usuDao= new usuarioDao();
	$usuDto= new usuarioDto();

	$usuDto->setIdUsuario($_POST['idUsuario']);
	$usuDto->setNombreUsuario($_POST['nombres']);
	$usuDto->setApellidoUsuario($_POST['apellidos']);
	$usuDto->setIdRol('3');
	$usuDto->setClave($_POST['clave']);

    $mensaje = $usuDao->registrarCliente($usuDto);

    header("Location: ../cliente.php");
	
}elseif ($_GET['id']!=NULL) {
    $uDAO = new usuarioDAO();
    $mensaje = $uDAO->eliminarUsuario($_GET['id']);
    header("Location: ../usuario/listaUsuario.php?mensaje".$mensaje);
}
elseif (isset($_POST['editar'])) {
	$usuDao=new usuarioDao();
	$usuDto=new usuarioDto();

	$usuDto->setIdUsuario($_POST['idUsuario']);
	$usuDto->setNombreUsuario($_POST['nombres']);
	$usuDto->setApellidoUsuario($_POST['apellidos']);
	$usuDto->setIdRol($_POST['idRol']);
	$usuDto->setClave($_POST['clave']);

    $mensaje = $usuDao->modificarUsuario($usuDto);

    header("Location: ../usuario/listaUsuario.php?mensaje=".$mensaje);
}

echo '<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

?>