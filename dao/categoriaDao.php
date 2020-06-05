<?php
class categoriaDao{

	public function listarCategoria(){
		$cnn=Conexion::getConexion();
		try {
			$listarCategoria="SELECT * FROM categoria";
			$query=$cnn->prepare($listarCategoria);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

	public function listaCategoriaXPedido($idPedido){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			//$listaFresa="SELECT * FROM productos";
		   $listaCategoriaXPedido="SELECT c.* from 
				categoria c inner join productos_has_categoria prodcat on c.idCategoria=prodcat.categoria_idCategoria
				inner join productos prod on prod.idProducto=prodcat.productos_idProducto inner join pedidos_has_productos
				pedprod on prod.idProducto=pedprod.productos_idProducto
				where pedprod.pedidos_idPedido = ?";
			$query=$cnn->prepare($listaCategoriaXPedido);
			$query->bindParam(1,intval($idPedido));
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			
		}
	}
}
?>