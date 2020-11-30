<?php 

require "../capa_negocios/ClaseUsuario.php";

require "../capa_logica/ConexionBaseDatos.php";

$id = $_POST['id'];

$usuario = new Usuario();

$sentencia = $usuario->Eliminar($id);

$conexion1 = new Conexion();

$conexion1->Conectar();

$conexion1->Ejecutar($sentencia);

$conexion1->Cerrar();

Header('location: ../capa_presentacion/PreUsuarios.php');

?>