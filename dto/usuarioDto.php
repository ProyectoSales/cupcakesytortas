<?php

class usuarioDto{
  private $idUsuario=0;
  private $nombreUsuario="";
  private $apellidoUsuario="";
  private $idRol=0;
  private $clave="";
  private $correo="";

  function getIdUsuario(){
  	return $this->idUsuario;
  }
  
  function getNombreUsuario(){
  	return $this->nombreUsuario;
  }

  function getApellidoUsuario(){
  	return $this->apellidoUsuario;
  }

  function getIdRol(){
  	return $this->idRol;
  }
  function getClave(){
  	return $this->clave;
  }
  function getCorreo(){
    return $this->correo;
  }
  function setIdUsuario($idUsuario){
      $this->idUsuario=$idUsuario;
  }

  function setNombreUsuario($nombreUsuario){
  	 $this->nombreUsuario=$nombreUsuario;
  }

  function setApellidoUsuario($apellidoUsuario){
  	$this->apellidoUsuario=$apellidoUsuario;
  }

  function setIdRol($idRol){
  	$this->idRol=$idRol;
  }

  function setClave($clave){
  	$this->clave=$clave;
  }

  function setCorreo($correo){
    $this->correo=$correo;
  }
}

?>