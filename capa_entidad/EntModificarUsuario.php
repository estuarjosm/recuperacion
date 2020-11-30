<?php 

require "../capa_negocios/ClaseUsuario.php";

require "../capa_logica/ConexionBaseDatos.php";

$fnombre = strtoupper($_POST['nombre']);
$fcorreo = strtoupper($_POST['correo']);
$fpass = sha1($_POST['pass']);
$frol = $_POST['rol'];
$id = $_POST['id'];

$usuario = new Usuario();

$sentencia = $usuario->Modificar($id, $fnombre, $fcorreo, $fpass, $frol);

$conexion1 = new Conexion();

$conexion1->Conectar();

$conexion1->Ejecutar($sentencia);

$conexion1->Cerrar();

session_start();

$_SESSION['Actualizar'] = 'Usuario Actualizado';

Header('location: ../capa_presentacion/PreUsuarios.php');


?>