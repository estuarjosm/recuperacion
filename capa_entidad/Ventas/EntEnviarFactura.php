<?php 
require '../../capa_logica/ConexionBaseDatos.php';
$conexion1 = new Conexion();

$conexion1->Conectar();

$datos = $conexion1->Consultar('call enviar_factura(10005)');

$conexion1->Cerrar();

if (!empty($datos)) {	
	$datosjason = json_encode($datos);
	echo $datosjason;
}

?>

