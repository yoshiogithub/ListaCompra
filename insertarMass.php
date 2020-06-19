<!DOCTYPE html>
<html>
<head>
	<title>Insertar Datos Mass</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>INGRESAR DATOS MASS</h1>
	<hr>
	
	<?php
		include("conexion.php");

	    $date=date('Y-m-d');
	    $fecha=$date;
		$productoMass=$_POST["productoMass"];

	    $numAleatorioMass=mt_rand(1,999);
		$nomAleatorioMass=substr($productoMass,0,3);
		$idMass=$nomAleatorioMass.$numAleatorioMass;
		

		$queryMass="INSERT INTO tablaMass (idMass,productoMass,fechaMass) 
		VALUES ('$idMass','$productoMass','$fecha')";
		$resultadoMass=$conexion->query($queryMass);
			if($resultadoMass){
				header("Location:tabla.php");
			}
		?>

	?>

		

	<p><button type="button"><a href="formulario.php">INGRESO DE NUEVO PRODUCTO</a></button></p>
	<p><button type="button"><a href="tabla.php">LISTA DE PRODUCTOS</a></button></p>
</body>
</html>