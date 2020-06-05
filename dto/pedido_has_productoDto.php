<?php
class pedido_has_productoDto{
	private $pedidos_idPedido=0;
	private $productos_idProducto=0;
	private $cantidad=0;

	function getPedido_idPedido(){
		return $this->pedidos_idPedido;
	}

	function getProductos_idProducto(){
		return $this->productos_idProducto;
	}


   	function setPedido_idPedido($pedidos_idPedido){
		$this->pedidos_idPedido=$pedidos_idPedido;
	}

	function setproductos_idProducto($productos_idProducto){
        $this->productos_idProducto=$productos_idProducto;
	}
}


?>