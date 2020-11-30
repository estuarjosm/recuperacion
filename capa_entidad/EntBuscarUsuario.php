<?php 

require "../capa_negocios/ClaseUsuario.php";

require "../capa_logica/ConexionBaseDatos.php";

$buscar =  strtoupper($_POST['buscar']);

$usuario = new Usuario();

$sentencia = $usuario->Buscar($buscar);


$conexion1 = new Conexion();

$conexion1->Conectar();

$datos = $conexion1->Consultar($sentencia);

$conexion1->Cerrar();

if (!empty($datos)) {
	echo '<table class="table table-striped">';
	echo '<tr><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>ROL</th><th>EDITAR</th><th>ELIMINAR</th></tr>';
	foreach ($datos as $fila) {
		echo "<tr>";
		foreach ($fila as $celda) {
			echo "<td> $celda </td>";
		}
		echo'<td><a href="../capa_presentacion/PreModificarUsuario.php?id='.$fila['id_usuario'] .'" class="btn btn-info">Editar</a></td>';
		echo'<td><a href="../capa_entidad/EntEliminarUsuario.php?id='.$fila['id_usuario'] .'" class="btn btn-danger">Eliminar</a></td>';
		echo "</tr>";
	}		

	echo '</table>';	
}
if (empty($datos)) {
	echo '<br><div class="alert alert-danger" role="alert"><h3>SIN RESULTADOS EN LA BUSQUEDA</h3></div>';
}

?>