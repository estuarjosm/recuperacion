<?php 

use PHPUnit\Framework\TestCase;

require 'capa_negocios/ClaseDetalle.php';

/**
*@test
*@testdox Clase Detalle Factura
**/

class ClaseDetalleTest extends TestCase
{
	/**
	*@test
	*@testdox Test Crear Detalle
	**/	
	public function test_crear_detalle()
	{
		$idventa = 10002;
		$idproducto = 1000;
		$valor = 7;
		$cantidad = 1;

		$folio1 = new Detalle();

		$sentencia_obtenida = $folio1->CrearDetalle($idventa,$idproducto,$valor,$cantidad);

		$sentencia_deseada = 'CALL crear_detalle(10002,1000,7,1)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Detalle Factura --Función Crear Detalle ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Obtener Ultimo Folio
	**/	
	public function test_folio_factura()
	{
		
		$folio1 = new Detalle();

		$sentencia_obtenida = $folio1->FolioFactura();

		$sentencia_deseada = 'CALL folio_factura()';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Detalle Factura --Función Folio Factura ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Mostrar Detalle Factura
	**/	
	public function test_mostrar_detalle()
	{
		$folio = 10002;

		$folio1 = new Detalle();

		$sentencia_obtenida = $folio1->MostrarDetalle($folio);

		$sentencia_deseada = 'CALL mostrar_detalle(10002)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Detalle Factura --Función Mostrar Detalle Factura ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Tatalm de Detalle Factura
	**/	
	public function test_total_detalle()
	{
		$folio = 10002;

		$folio1 = new Detalle();

		$sentencia_obtenida = $folio1->ObtenerTotal($folio);

		$sentencia_deseada = 'CALL total_detalle(10002)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Detalle Factura --Función Total de Detalle Factura ---SUPERADO---";
	}
}
?>