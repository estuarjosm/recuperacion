<?php 

use PHPUnit\Framework\TestCase;

require 'capa_negocios/ClaseUsuario.php';

/**
*@test
*@testdox Clase Usuario
**/

class ClaseUsuarioTest extends TestCase
{
	/**
	*@test
	*@testdox Test Crear Usuario
	**/
	public function test_crear()
	{
		$tnombre = 'Pedro Diaz';
		$tcorre = 'pedro@gmail.com';
		$tcontra = '12345';
		$trol = 1;
		
		$usuario1 = new Usuario();

		$sentencia_obtenida = $usuario1->Crear($tnombre,$tcorre,$tcontra,$trol);

		$sentencia_deseada = 'CALL crear_usuario("Pedro Diaz","pedro@gmail.com","'.sha1($tcontra).'",1,1)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función Crear ---SUPERADO---";
	}
	
	/**
	*@test
	*@testdox Test Mostrar Usuario
	**/

	public function test_mostrar()
	{
		$usuario2 = new Usuario();

		$sentencia_obtenida2 = $usuario2->Mostrar();

		$sentencia_deseada2 = 'CALL mostrar_usuario()';

		$this->assertEquals($sentencia_obtenida2,$sentencia_deseada2);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función Mostrar ---SUPERADO---";
	}
	
	/**
	*@test
	*@testdox Test Buscar un Usuario
	**/
	public function test_buscar_uno()
	{
		$usuario2 = new Usuario();

		$sentencia_obtenida = $usuario2->BuscarUno(2);

		$sentencia_deseada = 'CALL buscar_un_usuario(2)';

		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función BuscarUno---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Buscar Usuario
	**/
	public function test_buscar()
	{
		$usuario2 = new Usuario();

		$buscar = "Pedro";

		$sentencia_obtenida = $usuario2->Buscar($buscar);

		$sentencia_deseada = 'CALL buscar_usuario("Pedro")';

		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función Buscar---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Modificar Usuario
	**/
	public function test_modificar()
	{
		$tid = 1;
		$tnombre = 'Pedro Diaz';
		$tcorre = 'pedro@gmail.com';
		$tcontra = '12345';
		$trol = 1;
		
		$usuario1 = new Usuario();

		$sentencia_obtenida = $usuario1->Modificar($tid,$tnombre,$tcorre,$tcontra,$trol);

		$sentencia_deseada = 'CALL modificar_usuario(1,"Pedro Diaz","pedro@gmail.com","'.sha1($tcontra).'",1)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función Modificar ---SUPERADO---";
	}
	/**
	*@test
	*@testdox Test Eliminar Usuario
	**/
	public function test_eliminar()
	{
		$usuario2 = new Usuario();

		$sentencia_obtenida = $usuario2->Eliminar(2);

		$sentencia_deseada = 'CALL eliminar_usuario(2)';

		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n---TEST UNITARIO--- Test Clase Usuario --Función Eliminar---SUPERADO---";
	}

}
?>