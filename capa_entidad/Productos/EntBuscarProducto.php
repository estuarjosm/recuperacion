<?php 

require '../../capa_negocios/ClaseProducto.php';

require '../../capa_logica/ConexionBaseDatos.php';

$id = $_POST['cod'];

$producto1 = new Producto();

$consulta = $producto1->BuscarProducto($id);

$conexion1 = new Conexion();

$conexion1->Conectar();

$datos = $conexion1->Consultar($consulta);

$conexion1->Cerrar();

if (!empty($datos)) {	
	$datosjason = json_encode($datos);
	echo $datosjason;
}

?>