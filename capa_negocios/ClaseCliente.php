<?php 


class Cliente
{
	private $nit;
	private $nombre;
	private $direccion;

	function CrearCliente($tnit, $tnombre, $tdireccion){
		$this->nit = $tnit;
		$this->nombre = $tnombre;
		$this->direccion = $tdireccion;
		$cadena_sql = 'CALL crear_cliente("'.$this->nit.'","'.$this->nombre.'","'.$this->direccion.'")';
		return $cadena_sql; 
	}

	/*function MostarCliente(){
		
	}
	
	function ModificarCliente($tnit){
		
	}*/

	function BuscarCliente($tnit){
		$this->nit = $tnit;
		$cadena_sql = 'CALL buscar_cliente("'.$this->nit.'")';
		return $cadena_sql;
	}
	
	/*function EliminarCliente($tnit){
		
	}*/
}
?>


