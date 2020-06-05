<?php
class pedidoDao{
	public function registrarPedido(pedidoDto $pedidoDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO pedidos (idPedido,idUsuario,idEstado) VALUES (?,?,?)");
			$query->bindParam(1,intval($pedidoDto->getIdPedido()));
            $query->bindParam(2,intval($pedidoDto->getIdUsuario()));
            $query->bindParam(3,intval($pedidoDto->getIdEstado()));
            $query->execute();
            $mensaje = "Registro Exitoso";
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
		return $mensaje;
	}

	public function registrarPedido_Producto(pedido_has_productoDto $pedido_has_productoDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO pedidos_has_productos (pedidos_idPedido,productos_idProducto) VALUES (?,?)");
        	$query->bindParam(1,intval($pedido_has_productoDto->getPedido_idPedido()));
        	$query->bindParam(2,intval($pedido_has_productoDto->getProductos_idProducto()));

			$query->execute();
			$mensaje = "Registro Exitoso";
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
        return $mensaje;
	}


	public function registrarPedido_Estado(pedido_has_estadoDto $pedido_has_estadoDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO pedidos_has_estados (pedido_idPedido,estado_idEstado) VALUES (?,?)");
        	$query->bindParam(1,intval($pedido_has_estadoDto->getPedido_idPedido()));
        	$query->bindParam(2,intval($pedido_has_estadoDto->getEstados_idEstado()));

			$query->execute();
			$mensaje = "Registro Exitoso";
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
        return $mensaje;
	}

	public function obtenerSiguientePedido(){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("SELECT MAX(idPedido) as siguiente from pedidos");
			$query->execute();
			return $query->fetch();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function listarPedido(){
		$cnn=Conexion::getConexion();
		try {
			$listarPedidos="SELECT * FROM pedidos";
			$query=$cnn->prepare($listarPedidos);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

	public function listarPedidoUsuarios(){
		$cnn=Conexion::getConexion();
		try {
			$listarPedidos="SELECT distinct p.idPedido , u.nombres, u.apellidos,dp.fecha from 
			pedidos p inner join usuarios u on p.idUsuario=u.idUsuario
            inner join datospedido dp on p.idPedido=dp.idPedido;";
			$query=$cnn->prepare($listarPedidos);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

	public function listarPedidoProductos(){
		$cnn=Conexion::getConexion();
		try {
			$listarPedidos="SELECT prodped.productos_idProducto, prod.nombreProducto 
from productos prod inner join pedidos_has_productos prodped on 
prod.idProducto=prodped.productos_idProducto ;";
			$query=$cnn->prepare($listarPedidos);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

}

?>