<!DOCTYPE html>
<html>
<head>
	<title>Lista de productos</title>
</head>
<body>
	<h1>LISTA DE PRODUCTOS</h1>
	<link rel="stylesheet" href="css/style.css">
	<hr>
	<center>
		<div><button class="btn-administrador"><a href="administrador.html">IR A LA PAGINA PRINCIPAL</a></button></div>
		<button class="salir"><a href="index.html">SALIR</a></button>
		<table border="black">
			<thead>
				<td><a href="formulario.php">INGRESAR PRODUCTO</a></td>
				<th colspan="3">LISTA DE PRODUCTOS PLAZA VEA</th>
			</thead>
			<tbody>
				<tr>
					<td><strong>FECHA DE INGRESO</strong></td>
					<td><strong>ID</strong></td>
					<td><strong>NOMBRE DEL PRODUCTO</strong></td>
					<td colspan="1"><strong>OPERACION</strong></td>
				</tr>
				<?php
					include("conexion.php");

					$query="SELECT * FROM tablaPlazaVea";
					$resultado=$conexion->query($query);
				while ($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo strtoupper($row["fecha"]);?></td>
						<td><?php echo $row["id"];?></td>
						<td><?php echo strtoupper($row["producto"]);?></td>
						<td><a href="eliminar.php?id=<?php echo $row['id'];?>" colspan="2">ELIMINAR</a></td>			
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br><hr><hr><br>
		
		<table border="black">
			<thead>
				<td><a href="formularioMass.php">INGRESAR PRODUCTO</a></td>
				<th colspan="3">LISTA DE PRODUCTOS MASS</th>
			</thead>
			<tbody>
				<tr>
					<td><strong>FECHA DE INGRESO</strong></td>
					<td><strong>ID</strong></td>
					<td><strong>NOMBRE DEL PRODUCTO</strong></td>
					<td colspan="1"><strong>OPERACION</strong></td>
				</tr>
				<?php
					include("conexion.php");

					$queryMass="SELECT * FROM tablaMass";
					$resultadoMass=$conexion->query($queryMass);
				while ($rowMass=$resultadoMass->fetch_assoc()){
				?>
					<tr>
						<td><?php echo strtoupper($rowMass["fechaMass"]);?></td>
						<td><?php echo $rowMass["idMass"];?></td>
						<td><?php echo strtoupper($rowMass["productoMass"]);?></td>
						<td><a href="eliminar.php?idMass=<?php echo $rowMass['idMass'];?>">ELIMINAR</a></td>			
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</center>	
</body>
</html>