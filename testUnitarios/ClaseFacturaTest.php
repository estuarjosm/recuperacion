<?php 

use PHPUnit\Framework\TestCase;

require 'capa_negocios/ClaseFactura.php';

/**
*@test
*@testdox Clase Factura
**/

class ClaseFacturaTest extends TestCase
{
	/**
	*@test
	*@testdox Test Procesar Factura
	**/
	public function test_procesar_factura()
	{
		
		$fecha = "29/11/2020";
		$total = 1000;
		$nit = "1234567";
		$estado  = 1;

		$factura = new Factura();

		$sentencia_obtenida = $factura->ProcesarFactura($fecha,$total,$nit,$estado);

		$sentencia_deseada = 'CALL crear_factura("29/11/2020",1000,"1234567",1)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Factura --Función Crear Factura ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Anular Factura
	**/
	public function test_anular_factura()
	{
		
		$id = 10005;
		
		$factura = new Factura();

		$sentencia_obtenida = $factura->AnularFactura($id);

		$sentencia_deseada = 'CALL anular_factura(10005)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Factura --Función Anular Factura ---SUPERADO---";
	}
}
?>