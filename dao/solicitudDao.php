<?php
class solicitudDao{

	public function registrarSolicitud(solicitudDto $solicitudDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO solicitud (idSolicitud,idUsuario,descripcion) VALUES (?,?,?)");
        	$query->bindParam(1,$solicitudDto->getIdSolicitud());
            $query->bindParam(2,$solicitudDto->getIdUsuario());
            $query->bindParam(3,$solicitudDto->getDescripcion());
            $query->execute();

            $mensaje = "Registro Exitoso";
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
		return $mensaje;
	}

	public function registrarSolicitud_Insumo(solicitud_insumoDto $solicitud_insumoDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO solicitud_has_insumos (solicitud_idSolicitud,insumos_idInsumo,cantidad) VALUES (?,?,?)");
        	$query->bindParam(1,$solicitud_insumoDto->getSolicitudIdSolicitud());
        	$query->bindParam(2,$solicitud_insumoDto->getInsumosIdInsumo());
        	$query->bindParam(3,$solicitud_insumoDto->getCantidad());

        	$query->execute();
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
        return $mensaje;
	}

	public function obtenerSiguienteSolicitud(){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("SELECT MAX(idSolicitud) as siguiente from solicitud");
			$query->execute();
			return $query->fetch();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function listarSolicitudUsuarios(){
		$cnn=Conexion::getConexion();
		try {
			$listarSolicitud = "SELECT s.*, u.nombres from 
								usuarios u inner join solicitud s on u.idUsuario=s.idUsuario 
								;";
			$query=$cnn->prepare($listarSolicitud);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function listarSolicitud(){
		$cnn=Conexion::getConexion();
		try {
			$listarSolicitud = "SELECT i.nombreInsumo from
insumos i inner join solicitud_has_insumos si on
i.idInsumo=si.insumos_idInsumo;";
			$query=$cnn->prepare($listarSolicitud);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function listarSolicitud_Insumo(){
		$cnn=Conexion::getConexion();
		try {
		   $listarSolicitud_Insumo = "SELECT * FROM solicitud_has_insumos";
		   $query=$cnn->prepare($listarSolicitud_Insumo);
		   $query->execute();
		   return$query->fetchAll();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	
}
?>