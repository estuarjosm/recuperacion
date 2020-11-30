<!DOCTYPE html>
<html lang="eS">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>BUSQUEDA USUARIOS</title>
</head>
<body>
	<div class="container">
		<br>
		
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand">
				<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				</svg>
				BUSCAR USUARIOS
			</a>
			<form class="form-inline" action="PreBusquedaUsuario.php" method="post" autocomplete="off">
				<div class="form-group">
					<input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search" name="buscar" required>
				</div>
				<div class="form-group">
					<button class="btn btn-secondary my-2 my-sm-0" type="submit">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
							<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
						</svg>
						Buscar
					</button>					
				</div>				
			</form>						
		</nav>
		<br>
		<a class="btn btn-outline-secondary" href="PreUsuarios.php" role="boton">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
				<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
			</svg>
			Regresar
		</a>
		<br>
		<h2 class="text-center">RESULTADO DE LA BUSQUEDA</h2>
		<br>
		<?php require "../capa_entidad/EntBuscarUsuario.php";
		?>

	</div>
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>	
</body>
</html>
