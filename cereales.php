<!DOCTYPE html>
<html>
<head>
	<title>Cereales Plaza Vea</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<h1>CEREALES PLAZA VEA</h1>
		<p><button><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button>  
		<button><a href="tabla.php">LISTA DE PRODUCTOS</a></button>
		<button class="salir"><a href="/">SALIR</a></button></p>
	<hr>
	<form action="insertar.php" method="post">
	<div class="container">
    <label for="#" class="sub-titulos">EIKI</label>
		<div class="row">
			<div class="col-md-4">
				<button class="btn-productos"  value="LECHE(EIKI)" name="producto">LECHE</button>
				<button class="btn-productos"  value="GALLETAS(EIKI)" name="producto">GALLETAS</button>
				<button class="btn-productos"  value="CEREAL(EIKI)" name="producto">CEREAL</button>
			</div>
		</div>
        <label for="#" class="sub-titulos">ADULTO</label>
		<div class="row">
			<div class="col-md-4">
				<button class="btn-productos"  value="LECHE(ADULTO)" name="producto">LECHE</button>
				<button class="btn-productos"  value="GALLETAS(ADULTO)" name="producto">GALLETAS</button>
				<button class="btn-productos"  value="CEREAL(ADULTO)" name="producto">CEREAL</button>
			</div>
		</div>
	</div>
	</form>
		
	
	</center>
</body>
</html>