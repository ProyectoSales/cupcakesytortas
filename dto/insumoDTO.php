<?php
class insumoDTO{
	private $idInsumo=0;
	private $nombreInsumo='';
	private $stock="";
    
    function getIdInsumo(){
       return $this->idInsumo;
	}

	function getNombreInsumo(){
		return $this->nombreInsumo;
	}

	function getStock(){
		return $this->stock;
	}

	function setIdInsumo($idInsumo){
		$this->idInsumo=$idInsumo;
	}

	function setNombreInsumo($nombreInsumo){
        $this->nombreInsumo=$nombreInsumo;  
	}

	function setStock($stock){
		$this->stock=$stock;
	}
}
?>