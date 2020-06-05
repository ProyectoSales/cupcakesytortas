<?php
class pedido_has_estadoDTO{
	private $pedidos_idPedido=0;
	private $estados_idEstados=0;


	function getPedido_idPedido(){
		return $this->pedidos_idPedido;
	}

	function getEstados_idEstado(){
		return $this->estados_idEstados;
	}

	function setPedido_idPedido($pedidos_idPedido){
		$this->pedidos_idPedido=$pedidos_idPedido;
	}

    function setEstados_idEstados($estados_idEstados){
        $this->estados_idEstados=$estados_idEstados;
	}
}


?>