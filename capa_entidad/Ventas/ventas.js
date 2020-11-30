$(document).ready(function() {
	$('#agregar').hide();
	$('#venta').hide();
	cargardetalle();
	Total();

	console.log('Query funcionando');

	$('#nit').keyup(function(){
		let nit = $('#nit').val();		
		let numeroCaracteres = nit.length;
		if (numeroCaracteres > 1) {
			//console.log(nit);
			$.ajax({
				url: '../../capa_entidad/Clientes/EntBuscarCliente.php',
				type: 'POST',
				data: { nit },
				success: function(response){
					if (response == 0) {
						$('#nombre_cliente').val('');
						$('#direccion').val('');
					}					
					if (response != 0) {
						cliente = JSON.parse(response);							
						for (x of cliente){
							var nombre = (x.nombre_cliente);
							var direccion =	(x.direccion_cliente);
						}
						$('#nombre_cliente').val(nombre);
						$('#direccion').val(direccion);
						$('#botonCliente').removeAttr('disabled');						
					}
					
				}				

			})		
		}
		if (numeroCaracteres <= 1){
			$('#nombre_cliente').val('');
			$('#direccion').val('');
		}		
	});

	$('#codigo').keyup(function(){
		let cod = $('#codigo').val();		
		let numeroCaracteres = cod.length;
		if (numeroCaracteres > 3) {			
			$.ajax({
				url: '../../capa_entidad/Productos/EntBuscarProducto.php',
				type: 'POST',
				data: { cod },
				success: function(response){
					if (response == 0) {
						$('#descripcion').val('');
						$('#cantidad').val('');
						$('#precio').val('');
						$('#existencia').val('');
						$('#cantidad').attr('disabled', 'disabled');
					}					
					if (response != 0) {
						producto = JSON.parse(response);	
						//console.log(producto);
						for (x of producto){
							var nombreProducto = (x.nombre_producto);
							var existenciaProducto = (x.existencia_producto);
							var precio = (x.valor_venta);
						}
						$('#descripcion').val(nombreProducto);
						$('#existencia').val(existenciaProducto);
						$('#precio').val(precio);
						var existencia = parseInt(existenciaProducto);
						$('#cantidad').attr('max',existencia);
						$('#cantidad').removeAttr('disabled');
					}
					
				}				

			})		
		}
		if (numeroCaracteres <= 3){
			$('#descripcion').val('');
			$('#cantidad').val('');
			$('#precio').val('');
			$('#existencia').val('');
			$('#cantidad').attr('disabled', 'disabled');
		}		
	});
	
	$('#botonCliente').click(function(e){		
		$('#botonCliente').attr('disabled', 'disabled');
		$('#nit').attr('readonly', true);
		$('#agregar').show();
		$('#venta').show();
		e.preventDefault();
	});

	$('#cantidad').keyup(function(){
		var cant = $('#cantidad').val();		
		let numeroCaracteres = cant.length;
		if (numeroCaracteres > 0){
			//console.log(cant);
		}
		var canti = parseInt(cant);
		var existenciaf = $('#existencia').val();		
		var existenciam = parseInt(existenciaf);
		if (canti <= existenciam) {			
			$('#botonAgregar').removeAttr('disabled');
		}	
		if (canti > existenciam) {
			$('#botonAgregar').attr('disabled', 'disabled');
			$('#cantidad').val('');
			alert ('Contidad de Producto Tiene que se menor a ' + existenciam);
		}
		if (canti == 0 || canti == '') {			
			$('#botonAgregar').attr('disabled', 'disabled');
		}
		
	})
	$('#botonAgregar').click(function(e){		
		e.preventDefault();
		var cod_detalle = $('#codigo').val();
		var valor_detalle = $('#precio').val();
		var cantidad_detalle = $('#cantidad').val();
		//console.log(cod_detalle);
		//console.log(valor_detalle);
		//console.log(cantidad_detalle);
		$('#codigo').val('');					
		$('#descripcion').val('');
		$('#cantidad').val('');
		$('#precio').val('');
		$('#existencia').val('');
		$('#botonAgregar').attr('disabled', 'disabled');
		$.ajax({
			url: '../../capa_entidad/Ventas/EntDetalleFactura.php',
			type: 'POST',
			data: { cod_detalle, valor_detalle, cantidad_detalle },
			success: function(response){
				if (response != 0) {					
					console.log(response);
				}
				cargardetalle();
				Total();
			}				

		})
	});

	function cargardetalle(){
		$.ajax({
			url: '../../capa_entidad/Ventas/EntMostrarDetalle.php',
			type: 'GET',
			success: function(response){
				var mostrar = response;	
				$('#detalle').html(mostrar);
			}	
		});	
	}

	function Total(){
		$.ajax({
			url: '../../capa_entidad/Ventas/EntTotalDetalle.php',
			type: 'GET',
			success: function(response){
				var final = response;	
				$('#finalq').html(final);
			}	
		});	
	}
	$('#procesar').click(function(e){	
		var factnit = $('#nit').val();
		var total = $('#finalq').text();		
		$.ajax({
			url: '../../capa_entidad/Ventas/EntProcesarFactura.php',
			type: 'POST',
			data: { factnit, total },
			success: function(response){								
				console.log(response);								
			}				

		})
	});
});
