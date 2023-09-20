<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuevo registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="index.php?c=vehiculos&m=guardar" method="POST" name="nuevo" id="nuevo">
			<div class="form-group">
				<label for="">Placa</label>
				<input type="text" class="form-control" name="placa" id="placa">
			</div>
			<div class="form-group">
				<label for="">Marca</label>
				<input type="text" class="form-control" name="marca" id="marca">
			</div>
			<div class="form-group">
				<label for="">Modelo</label>
				<input type="text" class="form-control" name="modelo" id="modelo">
			</div>
			<div class="form-group">
				<label for="">Año</label>
				<input type="text" class="form-control" name="anio" id="anio">
			</div>
			<div class="form-group">
				<label for="">Color</label>
				<input type="text" class="form-control" name="color" id="color">
			</div>
			<button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
		</form>
	</div>
</body>
</html>