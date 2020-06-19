<!DOCTYPE html>
<html>
<head>
	<title>Vegetales Mass</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>VEGETALES MASS</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertarMass.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="PAPAYA" name="productoMass">PAPAYA</button>
					<button class="btn-productos"  value="KION" name="productoMass">KION</button>
					<button class="btn-productos"  value="PEPINO" name="productoMass">PEPINO</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="ZAPALLO" name="productoMass">ZAPALLO</button>
					<button class="btn-productos"  value="TOMATE" name="productoMass">TOMATE</button>
					<button class="btn-productos"  value="ZANAHORIA" name="productoMass">ZANAHORIA</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="PALTA" name="productoMass">PALTA</button>
					<button class="btn-productos"  value="NARANJA" name="productoMass">NARANJA</button>
					<button class="btn-productos"  value="PIÑA" name="productoMass">PIÑA</button>
				</div>
			</div>
		</div>
	</form>
		
	
	</center>
</body>
</html>