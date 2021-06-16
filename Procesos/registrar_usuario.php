<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuario registrado</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/LOGO.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php 
		include 'database.php';
		$db = new database();
		$db->conectarBD();

		extract($_POST);

		$hash = password_hash($pass,PASSWORD_DEFAULT);

		$cadena = "insert into Usuario(Nombres,Ap_paterno,Ap_materno,Direccion,Correo,Telefono,Contrasena,RolID) 
			values('$nombres','$ap_paterno','$ap_materno','$direccion','$correo','$telefono','$hash',1)";

		$db->ejecutaSQL($cadena);
		$db->desconectarBD();
		?>
		<?php  
		echo "<div class='alert alert-success'>Usuario registrado</div>";
		header("refresh:2; ../Vistas/Login.php");
		 ?>
	</div>
</body>
</html>