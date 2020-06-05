<?php
class insumoDao{

	public function registrarInsumo(insumoDto $insumoDto){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("INSERT INTO insumos (nombreInsumo, stock) VALUES(?,?)");
			$query->bindParam(1,$insumoDto->getNombreInsumo());
			$query->bindParam(2,$insumoDto->getStock());

			$query->execute();
			$mensaje="Registro Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}

		public function modificarInsumo(insumoDto $insumoDto){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("UPDATE insumos SET nombreInsumo=?,stock=? WHERE idInsumo=?");
			$query->bindParam(1,$insumoDto->getNombreInsumo());
			$query->bindParam(2,$insumoDto->getStock());
			$query->bindParam(3,$insumoDto->getIdInsumo());

			$query->execute();
			$mensaje="Modificación Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}

	public function listarInsumo(){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$listaInsumo= "SELECT * FROM insumos";
			$query=$cnn->prepare($listaInsumo);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

	public function obtenerInsumo($idInsumo){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("SELECT * FROM insumos WHERE idInsumo=?");
           $query->bindParam(1,$idInsumo);
           $query->execute();
           return $query->fetch();
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

	public function eliminarInsumo($idInsumo){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("DELETE FROM insumos WHERE idInsumo=?");
			$query->bindParam(1,$idInsumo);
			$query->execute();
			$mensaje = "Registro Eliminado";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
	}

}


?>