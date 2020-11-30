<?php 

require '../../capa_negocios/ClaseDetalle.php';

require '../../capa_logica/ConexionBaseDatos.php';

$detalle1 = new Detalle();

$consulta = $detalle1->FolioFactura();

$conexion1 = new Conexion();

$conexion1->Conectar();

$resultado = $conexion1->Consultar($consulta);

$conexion1->Cerrar();

foreach ($resultado as $fila) {
	$folio = $fila['id'];	
}

$consulta2 = $detalle1->ObtenerTotal($folio); 

$conexion2 = new Conexion();

$conexion2->Conectar();

$resultado2 = $conexion2->Consultar($consulta2);

$conexion2->Cerrar();

foreach ($resultado2 as $fila2) {
	$Total = $fila2['total'];	
}

echo $Total;

?>