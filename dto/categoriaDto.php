<?php
class categoriaDto{
	private $idCategoria=0;
	private $tipoCategoria='';

	function getIdCategoria(){
		return $this->idCategoria;
	}

	function getTipoCategoria(){
		return $this->tipoCategoria;
	}

	function setIdCategoria($idCategoria){
		$this->idCategoria=$idCategoria;
	}

	function setTipoCategoria($tipoCategoria){
		$this->tipoCategoria=$tipoCategoria;
	}
}

?>