<?php 

require '../../capa_negocios/ClaseDetalle.php';

require '../../capa_logica/ConexionBaseDatos.php';

$cod = $_POST['cod_detalle'];
$valor = $_POST['valor_detalle'];
$cantidad = $_POST['cantidad_detalle'];

$detalle1 = new Detalle();

$consulta = $detalle1->FolioFactura();

$conexion1 = new Conexion();

$conexion1->Conectar();

$resultado = $conexion1->Consultar($consulta);

$conexion1->Cerrar();

foreach ($resultado as $fila) {
	$folio = $fila['id'];	
}

$consulta2 = $detalle1->CrearDetalle($folio,$cod,$valor,$cantidad); 

$conexion2 = new Conexion();

$conexion2->Conectar();

$conexion2->Ejecutar($consulta2);

$conexion2->Cerrar();


?>