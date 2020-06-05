<?php
class productoDto{

	private $idProducto=0;
	private $nombreProducto="";
    private $cantidad="";
    private $precio=0;
    private $imagen;
    
    function getIdProducto(){
    	return $this->idProducto;
    }

    function getNombreProducto(){
    	return $this->nombreProducto;
    }

    function getCantidad(){
        return $this->cantidad;
    }

    function getPrecio(){
        return $this->precio;
    }

    function getImagen(){
        return $this->imagen;
    }

    function setIdProducto($idProducto){
    	$this->idProducto=$idProducto;
    }

    function setNombreProducto($nombreProducto){
    	$this->nombreProducto=$nombreProducto;
    }

    function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }

    function setPrecio($precio){
        $this->precio=$precio;
    }

    function setImagen($imagen){
        $this->imagen=$imagen;
    }
}

?>