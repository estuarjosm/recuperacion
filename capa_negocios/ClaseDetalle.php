<?php 

class Detalle
{
	function CrearDetalle($idventa,$idproducto, $valor, $cantidad){
		$sql = 'CALL crear_detalle('.$idventa.','.$idproducto.','.$valor.','.$cantidad.')';
		return $sql;
	}

	function FolioFactura(){
		$sql = 'CALL folio_factura()';
		return  $sql;
	}

	function MostrarDetalle($idfolio){
		$sql = 'CALL mostrar_detalle('.$idfolio.')';
		return $sql;
	}

	function ObtenerTotal($idfolio){
		$sql = 'CALL total_detalle('.$idfolio.')';
		return $sql;
	}
}

?>