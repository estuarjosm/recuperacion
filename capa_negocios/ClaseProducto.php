<?php 

class Producto
{
	private $idProducto;
	private $nombreProducto;
	private $existenciaProducto;
	private $valorCosto;
	private $valorVenta;
	private $estado_producto;

	function BuscarProducto($tidProducto){
		$this->idProducto = $tidProducto;
		$cadena_sql = 'CALL buscar_producto('.$this->idProducto.')';
		return $cadena_sql;
	}	
}
?>