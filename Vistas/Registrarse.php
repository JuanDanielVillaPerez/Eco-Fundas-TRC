<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/LOGO.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.login{
		width: 400px;
		height: 300px;
		margin: auto;
		display: block;
	}
	#imagenuser{
		width: 170px;
		height: 170px;
		margin: auto;
		display: block;
	}		
</style>
<body style="background-color: black;">
	<br>
	<div class="container">
		<div class="row">
			<img src="../img/usuario.png" alt="imagenuser" id="imagenuser">
		</div><br>
		<div class="row">
			<form class="login" action="../Procesos/registrar_usuario.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="nombres" placeholder="Nombres" required autofocus>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ap_paterno" placeholder="Apellido paterno" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ap_materno" placeholder="Apellido materno" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="correo" placeholder="Correo electronico" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
				</div>
				<input type="submit" class="btn btn-lg btn-warning btn-block" value="Registrarse" data>
			</form>
		</div>
	</div>
</body>
</html>