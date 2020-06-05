<?php
class datosPedidoDao{
	public function registrarDatosPedido(datosPedidoDto $datosPedidoDto){
        $cnn=Conexion::getConexion();
        try {
        	$query=$cnn->prepare("INSERT INTO datospedido (`idPedido`, `direccion`, `telefono`, `fecha`, `idUsuario`, `ciudad`, `barrio`) VALUES (?,?,?,?,?,?,?)");
			$query->bindParam(1,$datosPedidoDto->getIdPedido());
            $query->bindParam(2,$datosPedidoDto->getDireccion());
            $query->bindParam(3,$datosPedidoDto->getTelefono());
            $query->bindParam(4,$datosPedidoDto->getFecha());
            $query->bindParam(5,$datosPedidoDto->getIdUsuario());
            $query->bindParam(6,$datosPedidoDto->getCiudad());
            $query->bindParam(7,$datosPedidoDto->getBarrio());
            $query->execute();
            
            $mensaje = "Registro ok";
        } catch (Exception $e) {
        	$mensaje=$e->getMessage();
        }
        $cnn=null;
		return $mensaje;
	}

    public function listarDatosPedido($idPedido){
        $cnn=Conexion::getConexion();
        try {
            $listarDatosPedidos="SELECT u.nombres, u.apellidos,dp.*  FROM datospedido dp inner join
            usuarios u on u.idUsuario=dp.idUsuario where dp.idPedido=?;";
            $query=$cnn->prepare($listarDatosPedidos);
            $query->bindParam(1,$idPedido);
            $query->execute();
            return $query->fetchAll();  
        } catch (Exception $e) {
            $mensaje=$ex->getMessage();
        }
        return $mensaje;
    }
}
?>