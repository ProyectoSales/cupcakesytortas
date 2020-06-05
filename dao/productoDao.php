<?php
class productoDao{

	public function registrarProducto(productoDto $productoDto){
       $cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("INSERT INTO productos (idProducto,nombreProducto, cantidad,precio,imagen) VALUES(?,?,?,?,?)");
			$query->bindParam(1,$productoDto->getIdProducto());
			$query->bindParam(2,$productoDto->getNombreProducto());
			$query->bindParam(3,$productoDto->getCantidad());
			$query->bindParam(4,$productoDto->getPrecio());
            $query->bindParam(5,$productoDto->getImagen());
			$query->execute();
			$mensaje="Registro Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}

	public function registrarProductoCategoria(producto_categoriaDto $producto_categoriaDto){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("INSERT INTO productos_has_categoria (productos_idProducto,categoria_idCategoria,estado) VALUES(?,?,?)");
			$query->bindParam(1,$producto_categoriaDto->getIdProducto());
			$query->bindParam(2,$producto_categoriaDto->getIdCategoria());
			$query->bindParam(3,$producto_categoriaDto->getEstado());

			$query->execute();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function editarProducto(productoDto $productoDto){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("UPDATE productos SET nombreProducto=?, cantidad=? , precio=? WHERE idProducto=?");
			$query->bindParam(1,$productoDto->getNombreProducto());
			$query->bindParam(2,$productoDto->getCantidad());
			$query->bindParam(3,$productoDto->getPrecio());
			$query->execute();
			$mensaje="Registro Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}

	public function listarProducto(){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$listarProducto="SELECT p.idProducto, p.nombreProducto, p.cantidad,p.imagen,p.precio,
			c.tipoCategoria , pc.estado from productos p inner join 
			productos_has_categoria pc on p.idProducto=pc.productos_idProducto
			inner join categoria c on c.idCategoria=pc.categoria_idCategoria;";
			$query=$cnn->prepare($listarProducto);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function listaTodos(){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$listaTodos="SELECT * FROM productos";
			$query=$cnn->prepare($listaTodos);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			
		}
	}

	public function listaProductosXCategoria($idCategoria){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			//$listaFresa="SELECT * FROM productos";
		   $listaProductos="SELECT * from productos p inner join productos_has_categoria pc on
					p.idProducto=pc.productos_idProducto WHERE pc.categoria_idCategoria=?;";
			$query=$cnn->prepare($listaProductos);
			$query->bindParam(1,$idCategoria);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			
		}
	}

		public function listaProductosXPedido($idPedido, $idCategoria){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			//$listaFresa="SELECT * FROM productos";
		   $listaProductosXPedido="SELECT prod.* from 
				productos_has_categoria prodcat
				inner join productos prod on prod.idProducto=prodcat.productos_idProducto inner join pedidos_has_productos
				pedprod on prod.idProducto=pedprod.productos_idProducto
				where pedprod.pedidos_idPedido = ? AND prodcat.categoria_idCategoria = ?";	
			$query=$cnn->prepare($listaProductosXPedido);
			$query->bindParam(1,intval($idPedido));
			$query->bindParam(2,intval($idCategoria));
			$query->execute();
			return $query->fetch();
		} catch (Exception $e) {
			
		}
	}

    public function listaProdPedidos($idPedido){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			//$listaFresa="SELECT * FROM productos";
	   $listaProdPedidos="SELECT prod.*
	    from pedidos
		p inner join pedidos_has_productos pedprod on p.idPedido=pedprod.pedidos_idPedido
		inner join productos prod on prod.idProducto=pedprod.productos_idProducto
		where p.idPedido=?;";
			$query=$cnn->prepare($listaProdPedidos);
			$query->bindParam(1,$idPedido);
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $e) {
			
		}
	}

	public function obtenerProducto($idProducto){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
			$query=$cnn->prepare("SELECT * FROM productos WHERE idProducto=?");
           $query->bindParam(1,$idProducto);
           $query->execute();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	public function obtenerSiguienteProducto(){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("SELECT MAX(idProducto) as siguiente from productos");
			$query->execute();
			return $query->fetch();
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		return $mensaje;
	}

	
}

?>