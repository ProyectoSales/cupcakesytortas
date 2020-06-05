<?php

class datosPedidoDto{
	private $idDatosPedido=0;
	private $idPedido=0;
	private $direccion="";
	private $telefono=0;
	private $fecha;
	private $idUsuario=0;
	private $ciudad="";
	private $barrio="";

    function getIdDatosPedido(){
    	return $this->idDatosPedido;
    }

    function getIdPedido(){
    	return $this->idPedido;
    }
    function getDireccion(){
    	return $this->direccion;
    }
    function getTelefono(){
    	return $this->telefono;
    }
    function getFecha(){
    	return $this->fecha;
    }
    function getIdUsuario(){
    	return $this->idUsuario;
    }
    function getCiudad(){
    	return $this->ciudad;
    }
    function getBarrio(){
    	return $this->barrio;
    }


    function setIdDatosPedido($idDatosPedido){
    	$this->idDatosPedido=$idDatosPedido;
    }
    function setIdPedido($idPedido){
    	$this->idPedido=$idPedido;
    }
    function setDireccion($direccion){
    	$this->direccion=$direccion;
    }

    function setTelefono($telefono){
    	$this->telefono=$telefono;
    }

    function setFecha($fecha){
    	$this->fecha=$fecha;
    }
        function setIdUsuario($idUsuario){
    	$this->idUsuario=$idUsuario;
    }
    function setCiudad($ciudad){
    	$this->ciudad=$ciudad;
    }
    function setBarrio($barrio){
        $this->barrio=$barrio;
    }



}

?>


