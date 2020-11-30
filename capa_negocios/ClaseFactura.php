<?php 

class Factura
{
	function ProcesarFactura($fecha,$total,$nit,$estado){
		$sql = 'CALL crear_factura("'.$fecha. '",' .$total.',"'.$nit.'",'.$estado.')';
		return $sql;
	}	

	function AnularFactura($id){
		$sql = 'CALL anular_factura('.$id.')';
		return $sql;
	}
}
?>
