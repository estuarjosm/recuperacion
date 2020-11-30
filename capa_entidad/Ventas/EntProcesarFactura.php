<?php 

require '../../capa_negocios/ClaseFactura.php';

require '../../capa_logica/ConexionBaseDatos.php';
$zona='America/Guatemala';
date_default_timezone_set($zona);

$nit = $_POST['factnit'];
$total = $_POST['total'];
$fecha = date("d/m/Y");
$estado = 1;

$detalle1 = new Factura();

$consulta = $detalle1->ProcesarFactura($fecha,$total,$nit,$estado);

$conexion1 = new Conexion();

$conexion1->Conectar();

$conexion1->Ejecutar($consulta);

$conexion1->Cerrar();

?>