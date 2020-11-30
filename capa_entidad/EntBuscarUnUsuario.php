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
	<label>ID</label>
	<input type="text" class="form-control" id="id" name="id" readonly="readonly" value="'.$fila['id_usuario'].'">
	</div>
	<div class="form-group">
	<label for="nombre">Nombre y Apellido</label>
	<input type="text" class="form-control" id="nombre" name="nombre" required="text" maxlength="100" value="'.$fila['nombre_usuario'].'"">
	</div>
	<div class="form-group">
	<label for="correo_electronico">Correo Electrónico</label>
	<input type="email" class="form-control" id="correo_electronico" aria-describedby="emailHelp" name="correo" required="email" maxlength="100" value="'.$fila['correo_usuario'].'">				
	</div>
	<div class="form-group">
	<label for="pass">Password</label>
	<input type="password" class="form-control" id="pass" name="pass" required="password" maxlength="45">
	</div>
	<div class="form-group">
	<label for="rol">Rol</label>
	<select id="rol" class="form-control" name="rol" required>
	<option value=""selected disabled>Elegir...</option>
	<option value="1">Administrador</option>
	<option value="2">Vendedor</option>
	<option value="3">Control</option>							
	</select>
	</div>'; 
}
?>
