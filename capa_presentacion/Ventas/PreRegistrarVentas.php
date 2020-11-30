<!DOCTYPE html>
<html lang="eS">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
	<title>VENTAS</title>
</head>
<body>
	<div class="container">
		<br>
		
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand">
				<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
				</svg>
				REGISTRAR VENTA
			</a>
			
			<button class="btn btn-secondary" type="submit">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
				</svg> Regresar
			</button>
		</nav>
		<br>

		<div class="card">
			<div class="card-header border-primary">
				<h4>DATOS DE CLIENTE</h4>
			</div>			
			<div class="card-body">
				<form autocomplete="off">
					<div class="row">
						<div class="col-4">
							<input type="text" class="form-control text-uppercase" id="nit" required placeholder="NIT">	
						</div>
						<div class="col-8">
							<input type="text" class="form-control" id="nombre_cliente" placeholder="NOMBRE" readonly>	
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-12">
							<input type="text" class="form-control" id="direccion" placeholder="DIRECCIÓN" readonly>
						</div>						
					</div>
					<br/>
					<div class="row">
						<div class="col-12">
							<button class="btn btn-info btn-block" id="botonCliente" disabled>ACEPTAR
							</button>
						</div>						
					</div>

				</form>			
			</div>			
		</div>	
		<br>
		<div class="card" id="agregar">
			<div class="card-header border-primary">
				<h4>AGREGAR PRODUCTO</h4>
			</div>			
			<div class="card-body">
				<form autocomplete="off" id="registrar">
					<div class="row">
						<div class="col-3">
							<input type="text" class="form-control" id="codigo" required placeholder="CODIGO">	
						</div>
						<div class="col-2 text-right align-self-center">
							<span class="align-middle">DESCRIPCIÓN</span>
						</div>
						<div class="col-7">
							<input type="text" class="form-control" id="descripcion" readonly>	
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-2 text-right align-self-center">
							<span class="align-middle">CANTIDAD</span>
						</div>
						<div class="col-2">
							<input type="number" class="form-control" id="cantidad"  min="1" required="" disabled>
						</div>
						<div class="col-2 text-right align-self-center">
							<span class="align-middle">PRECIO Q</span>
						</div>
						<div class="col-2">
							<input type="text" class="form-control" id="precio" readonly>
						</div>
						<div class="col-2 text-right align-self-center">
							<span class="align-middle">EXISTENCIA</span>
						</div>
						<div class="col-2">
							<input type="text" class="form-control" id="existencia" readonly>
						</div>						
					</div>
					<br/>
					<div class="row">
						<div class="col-12">
							<button class="btn btn-primary btn-block" id="botonAgregar" disabled>AGREGAR +</button>
						</div>					
					</div>
				</form>			
			</div>			
		</div>	

		<br>
		<div class="card" id="venta">
			<div class="card-header border-primary">
				<h4>DETALLE VENTA</h4>
			</div>			
			<div class="card-body">
				<div class="row" id="detalle">
					
				</div>
				<br>
				<div class="row">
					<div class="col-3">		
					</div>
					<div class="col-3">
					<h2>TOTAL Q</h2>
					</div>
					<div class="col-3">
					<h2 id="finalq"></h2>	
					</div>
					<div class="col-3">		
					</div>
					
				</div>

				<br>
				<div class="row">
					<div class="col-6">
						<a href="#" class="btn btn-danger btn-block">ELIMINAR</a>
					</div>
					<div class="col-6">
						<button class="btn btn-success btn-block" id="procesar">PROCESAR</button>
					</div>
				</div>
			</div>			
		</div>
	</div>	
</div>


<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.js"></script>	
<script src="../../capa_entidad/Ventas/ventas.js"></script>
</body>
</html>