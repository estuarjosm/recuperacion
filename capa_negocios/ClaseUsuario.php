<?php 

class Usuario
{
	private $id;	
	private $nombre;
	private $correo;
	private $contra;
	private $rol;
	private $estado;

	function Crear($vnombre, $vcorreo, $vcontra, $vrol)
	{
		$this->nombre = $vnombre;
		$this->correo = $vcorreo;
		$this->contra = sha1($vcontra);
		$this->rol = $vrol;
		$this->estado = 1;
		$cadena_sql =  
		'CALL crear_usuario("'.$this->nombre.'","'.$this->correo.'","'.$this->contra.'",'.$this->rol.','.$this->estado.')';
		return $cadena_sql;
	}

	function Mostrar()
	{
		$cadena_sql = 'CALL mostrar_usuario()';
		return $cadena_sql;
	}

	function BuscarUno($vbuscar)
	{
		$cadena_sql = 'CALL buscar_un_usuario('.$vbuscar.')';
		return $cadena_sql;
	}
	
	function Modificar($vid, $vnombre, $vcorreo, $vcontra, $vrol)
	{
		$this->id = $vid;
		$this->nombre = $vnombre;
		$this->correo = $vcorreo;
		$this->contra = sha1($vcontra);
		$this->rol = $vrol;		
		$cadena_sql =  
		'CALL modificar_usuario('.$this->id.',"'.$this->nombre.'","'.$this->correo.'","'.$this->contra.'",'.$this->rol.')';
		return $cadena_sql;
	}
	
	function Buscar($vbuscar)
	{
		$cadena_sql = 'CALL buscar_usuario("'.$vbuscar.'")';
		return $cadena_sql;
	}
	
	
	function Eliminar($id)
	{
		$cadena_sql = 'CALL eliminar_usuario('.$id.')';
		return $cadena_sql;
	}
}