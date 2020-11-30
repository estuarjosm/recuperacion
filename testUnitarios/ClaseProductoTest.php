<?php 

use PHPUnit\Framework\TestCase;

require 'capa_negocios/ClaseProducto.php';

/**
*@test
*@testdox Clase Producto
**/

class ClaseProductoTest extends TestCase
{
	/**
	*@test
	*@testdox Test Buscar Producto
	**/
	public function test_buscar_producto()
	{
		
		$id = 1001;
		
		$producto1 = new Producto();

		$sentencia_obtenida = $producto1->BuscarProducto($id);

		$sentencia_deseada = 'CALL buscar_producto(1001)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Producto --Función Buscar Producto ---SUPERADO---";
	}
}
?>