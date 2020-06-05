<?php
class pedidoDto{
	private $idPedido=0;
	private $idUsuario=0;
	private $idEstado=0;

	function getIdPedido(){
		return $this->idPedido;
	}

	function getIdUsuario(){
		return $this->idUsuario;
	}

	function getIdEstado(){
		return $this->idEstado;
	}


	function setIdPedido($idPedido){
		$this->idPedido=$idPedido;
	}

	function setIdUsuario($idUsuario){
        $this->idUsuario=$idUsuario;
	}

	function setEstado($idEstado){
		$this->idEstado=$idEstado;
	}

}


?>