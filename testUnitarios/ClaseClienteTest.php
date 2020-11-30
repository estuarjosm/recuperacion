<?php 

use PHPUnit\Framework\TestCase;

require 'capa_negocios/ClaseCliente.php';

/**
*@test
*@testdox Clase Cliente
**/

class ClaseClienteTest extends TestCase
{
	/**
	*@test
	*@testdox Test Crear Cliente
	**/
	public function test_crear_cliente()
	{
		$nit = '1234567';
		$nombre = 'Pedro Diaz';
		$direccion = '4 calle 3-10, Escuintla';

		$cliente1 = new Cliente();

		$sentencia_obtenida = $cliente1->CrearCliente($nit,$nombre,$direccion);

		$sentencia_deseada = 'CALL crear_cliente("1234567","Pedro Diaz","4 calle 3-10, Escuintla")';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Cliente --Función Crear Cliente ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Buscar Cliente
	**/
	public function test_buscar_cliente()
	{
		$nit = "1234567";
		
		$cliente1 = new Cliente();

		$sentencia_obtenida = $cliente1->BuscarCliente($nit);

		$sentencia_deseada = 'CALL buscar_cliente("1234567")';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Cliente --Función Buscar Cliente ---SUPERADO---";
	}
}
?>