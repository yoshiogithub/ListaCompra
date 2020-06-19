<!DOCTYPE html>
<html>
<head>
	<title>Vegetales Plaza Vea</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>VEGETALES PLAZA VEA</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertar.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="PAPAYA" name="producto">PAPAYA</button>
					<button class="btn-productos"  value="KION" name="producto">KION</button>
					<button class="btn-productos"  value="PEPINO" name="producto">PEPINO</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="ZAPALLO" name="producto">ZAPALLO</button>
					<button class="btn-productos"  value="TOMATE" name="producto">TOMATE</button>
					<button class="btn-productos"  value="ZANAHORIA" name="producto">ZANAHORIA</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<button class="btn-productos"  value="PALTA" name="producto">PALTA</button>
					<button class="btn-productos"  value="NARANJA" name="producto">NARANJA</button>
					<button class="btn-productos"  value="PIÑA" name="producto">PIÑA</button>
				</div>
			</div>
		</div>
	</form>
		
	
	</center>
</body>
</html>