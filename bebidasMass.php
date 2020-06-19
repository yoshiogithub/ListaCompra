<!DOCTYPE html>
<html>
<head>
	<title>Registro de vegetales</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>VEGETALES</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertar.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="INKACOLA" name="productoMass">INKACOLA</button>
					<button class="btn-productos"  value="AGUA" name="productoMass">AGUA</button>
					<button class="btn-productos"  value="JUGO(PIÑA)" name="productoMass">JUGO(PIÑA)</button>
				</div>
			</div>
		</div>
	</form>
		
	
	</center>
</body>
</html>