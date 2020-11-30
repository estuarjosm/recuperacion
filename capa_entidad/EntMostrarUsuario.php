<?php
require "../capa_logica/ConexionBaseDatos.php";
require "../capa_negocios/ClaseUsuario.php";

$conexion1 = new Conexion();

$conexion1->Conectar();

$usuarios = new Usuario();

$sentencia = $usuarios->Mostrar();

$datos = $conexion1->Consultar($sentencia);


if (isset($_SESSION['mensaje'])) 
{
	print '<br><div class="alert alert-danger" role="alert">'.$_SESSION['mensaje'].'</div>';
	session_destroy();
}

/*if (isset($_SESSION['Actualizar'])) 
{
	echo '<br><div class="alert alert-success" role="alert">Usuario Actualizado</div>';
	session_destroy();
}*/

if (empty($_SESSION['mensaje'])) 
{
	if (isset($datos)) {
		echo '<table class="table table-striped">';
		echo '<tr><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>ROL</th><th>EDITAR</th><th>ELIMINAR</th></tr>';
		foreach ($datos as $fila) {
			echo "<tr>";
			foreach ($fila as $celda) {
				echo "<td> $celda </td>";
			}
			echo'<td><a href="../capa_presentacion/PreModificarUsuario.php?id='.$fila['id_usuario'] .'" class="btn btn-info">Editar</a></td>';
			echo'<td><a href="../capa_presentacion/PreEliminarUsuario.php?id='.$fila['id_usuario'] .'" class="btn btn-danger">Eliminar</a></td>';
			echo "</tr>";
		}		

		echo '</table>';	
	}
	if (empty($datos)) {
		echo '<br><div class="alert alert-danger" role="alert"><h3>SIN DATOS</h3></div>';
	}
}

$conexion1->Cerrar();

?>

