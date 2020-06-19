<!DOCTYPE html>
<html>
<head>
	<title>Congelados Mass</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>CONGELADOS MASS</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertarMass.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="POLLO" name="productoMass">POLLO</button>
					<button class="btn-productos"  value="PESCADO" name="productoMass">PESCADO</button>
					<button class="btn-productos"  value="HELADO" name="productoMass">HELADO</button>
				</div>
			</div>
		</div>
	</form>
		
	
	</center>
</body>
</html>