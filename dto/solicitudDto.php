<?php
class solicitudDto {
	private $idSolicitud=0;
	private $idUsuario=0;
	private $descripcion="";

	function getIdSolicitud(){
       return $this->idSolicitud;
	}

	function getIdUsuario(){
		return $this->idUsuario;
	}

	function getDescripcion(){
		return $this->descripcion;
	}

	function setIdSolicitud($idSolicitud){
		$this->idSolicitud=$idSolicitud;
	}

	function setIdUsuario($idUsuario){
		$this->idUsuario=$idUsuario;
	}

	function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
	}
}
?>