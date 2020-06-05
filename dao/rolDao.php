<?php
class rolDao{
	public function listarRol(){
		$cnn=Conexion::getConexion();
		try {
			$listaRol="SELECT * FROM rol";
			$query=$cnn->prepare($listaRol);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}
}

?>