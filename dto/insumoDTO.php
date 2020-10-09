<?php
class insumoDTO{
	private $idInsumo=0;
	private $nombreInsumo='';
	private $precio="";
	private $descripcion='';
	private $imagen;
    
    function getIdInsumo(){
       return $this->idInsumo;
	}

	function getNombreInsumo(){
		return $this->nombreInsumo;
	}

	function getPrecio(){
		return $this->precio;
	}

	function getDescripcion(){
		return $this->descripcion;
	}

	function getImagen(){
        return $this->imagen;
    }

	function setIdInsumo($idInsumo){
		$this->idInsumo=$idInsumo;
	}

	function setNombreInsumo($nombreInsumo){
        $this->nombreInsumo=$nombreInsumo;  
	}

	function setPrecio($precio){
		$this->precio=$precio;
	}

	function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
	}

	function setImagen($imagen){
        $this->imagen=$imagen;
    }
}
?>