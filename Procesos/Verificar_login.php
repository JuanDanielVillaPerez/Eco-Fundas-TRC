<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verificado</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/LOGO.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
	<div class="container">
		<?php 
		include 'database.php';
		$db = new database();
		$db->conectarBD();
		extract($_POST);
		$db->verifica_login("$correo","$pass");

		$db->desconectarBD();

		 ?>
	</div>
</body>
</html>