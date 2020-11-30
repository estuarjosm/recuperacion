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

$consulta2 = $detalle1->MostrarDetalle($folio); 

$conexion2 = new Conexion();

$conexion2->Conectar();

$datos = $conexion2->Consultar($consulta2);

$conexion2->Cerrar();

if (isset($datos)) {		
	$enviar='';
	$enviar.='<table class="table table-striped">
	<thead>
	<tr class="text-center">
	<th>ID</th>
	<th>DESCRIPCIÓN</th>
	<th>PRECIO</th>
	<th>CANTIDAD</th>
	<th>SUBTOTAL</th>
	<th>ELIMINAR</th>
	</tr>
	</thead>
	<tbody>';
	foreach ($datos as $fila) {
		$enviar.='<tr class="text-center">';
		foreach ($fila as $celda) {
			$enviar.='<td>'. $celda.' </td>';			
		}
		$enviar.='<td><button class="delete btn btn-danger">Eliminar</button></td>';
		$enviar.='</tr>';
	}	
	$enviar.= '</tbody>
	</table>';
	
	echo $enviar;	
}
?>