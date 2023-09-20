<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vehiculos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	<h1>Vehiculos</h1>
	<a href="index.php?c=vehiculos&m=nuevo" title="" class="btn btn-primary">Nuevo</a>
		<table class="table">
			<caption>Vehiculos</caption>
			<thead>
				<tr>
					<th>Placa</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Año</th>
					<th>Color</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['vehiculos'] as $value) {
					echo "<tr>";
					echo "<td>".$value['placa'] ."</td>";
					echo "<td>".$value['marca'] ."</td>";
					echo "<td>".$value['modelo'] ."</td>";
					echo "<td>".$value['anio'] ."</td>";
					echo "<td>".$value['color'] ."</td>";
					echo "<td><a href='".$value['color']."'>Editar</a></td>";
					echo "<td><a href='index.php?c=vehiculos&m=eliminar&id=".$value['id']."'>Eliminar</a></td>";
					echo "</tr>";
				} ?>
			</tbody>
		</table>
	</div>
</body>
</html>