<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicia sesión</title>
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
	<?php
	if (isset($_SESSION["Usuario"]) or isset($_SESSION["Admin"])) {
		if (isset($_SESSION["Usuario"])) {
			echo "<div class='alert alert-warning'>
			<h2 align='center'> Ya tiene una sesion activa, Usuario: ".$_SESSION["Usuario"]."</h2>";
			echo "<h3 align='center'>
			<a href='../Procesos/cerrar_sesion.php'>[Cerrar sesion]</a>
			</h3>";	
		}
		if (isset($_SESSION["Admin"])) {
			echo "<div class='alert alert-warning'>
			<h2 align='center'> Ya tiene una sesion activa, Administrador: ".$_SESSION["Admin"]."</h2>";
			echo "<h3 align='center'>
			<a href='../Procesos/cerrar_sesion.php'>[Cerrar sesion]</a>
			</h3>";
		}
	}
	else{

	 ?>
	<nav class="navbar navbar-expand-lg navbar-light " style=" background-color: yellow">
		<a class="navbar-brand" href="#" style="color: black">
		<img src="../img/LOGO.png" style="width: 100px; height: 100px"><strong>ECO-FUNDAS-TRC</strong></a>
		<button class="navbar-toggler" style="color: rgba(85,68,51,1.00)" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../index.php" style="color: black">INICIO</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="Productos.php" style="color: black">PRODUCTOS</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="Contacto.php" style="color: black">CONTACTO</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="Quienes_Somos.php" style="color: black">NOSOTROS</a>
					</li>
				</ul>
		</div>
</nav>
<br>
<div class="container">
		<div class="row">
			<img src="../img/usuario.png" alt="imagenuser" id="imagenuser">
		</div>
		<br>
		<div class="row">
			<form class="login" action="../Procesos/Verificar_login.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="correo" placeholder="Correo electronico" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
				</div>
				<input type="submit" class="btn btn-lg btn-warning btn-block" value="Inicia sesion">
				<br>
				<br>
				<p style="color:#4AABE3  ;" align="center">¿No te has registrado?</p>
				<a href="Registrarse.php" align="center"><h2>Registrate</h2></a>
			</form>
		</div>
	</div>
	<?php 
	}
	 ?>
</body>
</html>