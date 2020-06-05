<?php
class estadoDto{
	private $idEstado=0;
	private $nombreEstado='';

	function getIdEstado(){
		return $this->idEstado;
	}

	function getNombreEstado(){
		return $this->nombreEstado;
	}

	function setIdEstado($idEstado){
		$this->idEstado=$idEstado;
	}

	function setNombreEstado($nombreEstado){
		$this->nombreEstado=$nombreEstado;
	}
}

?>
