<?php
class producto_categoriaDto{
     private $productos_idProducto=0;
     private $categoria_idCategoria=0;
     private $estado="";

     function getIdProducto(){
     	return $this->productos_idProducto;
     }

     function getIdCategoria(){
     	return $this->categoria_idCategoria;
     }

     function getEstado(){
     	return $this->estado;
     }

     function setIdProducto($productos_idProducto){
     	$this->productos_idProducto=$productos_idProducto;
     }

     function setIdCategoria($categoria_idCategoria){
     	$this->categoria_idCategoria=$categoria_idCategoria;
     }

     function setEstado($estado){
     	$this->estado=$estado;
     }

}
?>