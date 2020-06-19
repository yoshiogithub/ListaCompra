
	<?php
	include("conexion.php");
	include("tabla.php");

	$id=$_REQUEST['id'];
	$idMass=$_REQUEST['idMass'];

	$query="DELETE FROM tablaPlazaVea WHERE id='$id'";
	$resultado=$conexion->query($query);

	$query="DELETE FROM tablaMass WHERE idMass='$idMass'";
	$resultadoMass=$conexion->query($query);
	
	if($resultado){
		header("Location:tabla.php");
	}else{
		echo"Borrado no exitoso";
	}

    if($resultadoMass){
		header("Location:tabla.php");
	}else{
		echo"Borrado no exitoso";
	}
	?>
	