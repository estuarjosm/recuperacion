<?php 

require '../../capa_negocios/ClaseCliente.php';

require '../../capa_logica/ConexionBaseDatos.php';

$nit = $_POST['nit'];


$cliente1 = new Cliente();

$consulta = $cliente1->BuscarCliente($nit);

$conexion1 = new Conexion();

$conexion1->Conectar();

$datos = $conexion1->Consultar($consulta);

$conexion1->Cerrar();

if (!empty($datos)) {	
	$datosjason = json_encode($datos);
	echo $datosjason;
}

?>