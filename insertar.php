<!DOCTYPE html>
<html>
<head>
	<title>Insertar Datos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>INGRESAR DATOS</h1>
	<hr>
	
	<?php
		include("conexion.php");

	    $date=date('Y-m-d');
	    $fecha=$date;

		$producto=$_POST["producto"];

		$numAleatorio=mt_rand(1,999);
		$nomAleatorio=substr($producto,0,3);
		$id=$nomAleatorio.$numAleatorio;

		$query="INSERT INTO tablaPlazaVea (id,producto,fecha) 
				VALUES ('$id','$producto','$fecha')";
		$resultado=$conexion->query($query);
			if($resultado){
				header("Location:tabla.php");
			}

		?>

	?>

		

	<p><button type="button"><a href="formulario.php">INGRESO DE NUEVO PRODUCTO</a></button></p>
	<p><button type="button"><a href="tabla.php">LISTA DE PRODUCTOS</a></button></p>
</body>
</html>