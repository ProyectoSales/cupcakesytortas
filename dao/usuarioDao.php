<?php
class usuarioDao{
	public function registrarUsuario(usuarioDto $usuarioDto){
		$cnn=Conexion::getConexion();
		$mensaje="";
		try {
		  $query=$cnn->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?)");
			$query->bindParam(1, $usuarioDto->getIdUsuario());
			$query->bindParam(2, $usuarioDto->getNombreUsuario());
			$query->bindParam(3, $usuarioDto->getApellidoUsuario());
			$query->bindParam(4, $usuarioDto->getIdRol());
			$query->bindParam(5, $usuarioDto->getClave());
			
			$query->execute();
			$mensaje="Registro Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}

	public function registrarCliente(usuarioDto $usuarioDto){
	    $cnn=Conexion::getConexion();
		$mensaje="";
		try {
		  $query=$cnn->prepare("INSERT INTO usuarios VALUES (?,?,?,3,?)");
			$query->bindParam(1, $usuarioDto->getIdUsuario());
			$query->bindParam(2, $usuarioDto->getNombreUsuario());
			$query->bindParam(3, $usuarioDto->getApellidoUsuario());
			$query->bindParam(4, $usuarioDto->getIdRol());
			$query->bindParam(5, $usuarioDto->getClave());
			
			$query->execute();
			$mensaje="Registro Exitoso";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
		$cnn=null;
		return $mensaje;	
	}

    public function modificarUsuario(usuarioDto $usuarioDto){
       $cnn=Conexion::getConexion();
       $mensaje="";
       try {
       	 $query=$cnn->prepare("UPDATE usuarios SET nombres=?,apellidos=?,idRol=?,clave=? WHERE idUsuario=?");
       	 $query->bindParam(1, $usuarioDto->getNombreUsuario());
       	 $query->bindParam(2, $usuarioDto->getApellidoUsuario());
       	 $query->bindParam(3, $usuarioDto->getIdRol());
       	 $query->bindParam(4, $usuarioDto->getClave());
       	 $query->bindParam(5, $usuarioDto->getIdUsuario());

       	 $query->execute();
       	 $mensaje="Modificación Exitosa";
       } catch (Exception $e) {
       	  $mensaje=$ex->getMessage();
       }
    }

	public function listarUsuario(){
		$cnn=Conexion::getConexion();
		try {
			$listaUsuario="SELECT * FROM usuarios where idRol in(1,2,3);";
			$query=$cnn->prepare($listaUsuario);
			$query->execute();
			return $query->fetchAll();	
		} catch (Exception $e) {
			$mensaje=$ex->getMessage();
		}
		return $mensaje;
	}

    public function listaProveedores(){
    	$cnn=Conexion::getConexion();
    	try {
    		$listaProveedores="SELECT * FROM usuarios WHERE idRol=4";
    		$query=$cnn->prepare($listaProveedores);
    		$query->execute();
    		return $query->fetchAll();
    	} catch (Exception $e) {
    		$mensaje=$ex->getMessage();
    	}
    	return $mensaje;
    }

    public function obtenerUsuario($idUsuario){
        $cnn=Conexion::getConexion();
        try {
           $query=$cnn->prepare("SELECT * FROM usuarios WHERE idUsuario=?");
           $query->bindParam(1,$idUsuario);
           $query->execute();
           return $query->fetch();
        } catch (Exception $e) {
        	echo 'Error' . $ex->getMessage();
        }
    }

	public function eliminarUsuario($idUsuario){
		$cnn=Conexion::getConexion();
		try {
			$query=$cnn->prepare("DELETE FROM usuarios WHERE idUsuario=?");
			$query->bindParam(1,$idUsuario);
			$query->execute();
			$mensaje = "Registro Eliminado";
		} catch (Exception $e) {
			$mensaje=$e->getMessage();
		}
	}


}

?>