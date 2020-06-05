<?php
class rolDto{
	private $idRol=0;
	private $tipoRol="";

	function getIdRol(){
		return $this->idRol;
	}

	function getTipoRol(){
		return $this->tipoRol;
	}

	function setIdRol($idRol){
		$this->idRol=$idRol;
	}

	function setTipoRol($tipoRol){
       $this->tipoRol=$tipoRol;
	}
}

?>