<!DOCTYPE html>
<html>
<head>
	<title>Registro de bebidas</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>BEBIDAS PLAZA VEA</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertar.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="INKACOLA" name="producto">INKACOLA</button>
					<button class="btn-productos"  value="AGUA" name="producto">AGUA</button>
					<button class="btn-productos"  value="JUGO(PIÑA)" name="producto">JUGO(PIÑA)</button>
				</div>
			</div>
		</div>
	</form>
		
	
	</center>
</body>
</html>