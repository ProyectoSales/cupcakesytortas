<?php
class solicitud_insumoDto{
	private $solicitud_idSolicitud=0;
	private $insumos_idInsumo=0;
	private $cantidad="";

	function getSolicitudIdSolicitud(){
		return $this->solicitud_idSolicitud;
	}

	function getInsumosIdInsumo(){
        return $this->insumos_idInsumo;
	}

	function getCantidad(){
		return $this->cantidad;
	}

	function setSolicitudIdSolicitud($solicitud_idSolicitud){
		$this->solicitud_idSolicitud=$solicitud_idSolicitud;
	}

	function setInsumosIdInsumo($insumos_idInsumo){
		$this->insumos_idInsumo=$insumos_idInsumo;
	}

	function setCantidad($cantidad){
        $this->cantidad=$cantidad;
	}

}

?>