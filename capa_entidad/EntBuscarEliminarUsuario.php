<?php 

require "../capa_negocios/ClaseUsuario.php";

require "../capa_logica/ConexionBaseDatos.php";

$id = $_GET['id'];

$usuario = new Usuario();

$sentencia = $usuario->BuscarUno($id);

$conexion1 = new Conexion();

$conexion1->Conectar();

$datos = $conexion1->Consultar($sentencia);

$conexion1->Cerrar();

foreach ($datos as $fila) 
{
	echo '<div class="form-group">
	<label>ID (NO SE PUEDE MODIFICAR)</label>
	<input type="text" class="form-control" id="id" name="id" readonly="readonly" value="'.$fila['id_usuario'].'">
	</div>
	<div class="form-group">
	<label for="nombre">Nombre y Apellido</label>
	<input type="text" class="form-control" id="nombre" name="nombre" readonly="readonly" value="'.$fila['nombre_usuario'].'"">
	</div>
	<div class="form-group">
	<label for="correo_electronico">Correo Electrónico</label>
	<input type="email" class="form-control" id="correo_electronico" name="correo" readonly="readonly" value="'.$fila['correo_usuario'].'">
	</select>
	</div>'; 
}
?>