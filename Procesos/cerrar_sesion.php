<?php 
	
	include 'database.php';
	$db= new database();
	$db->conectarBD();
	
	$db->cerrarsesion();

	$db->desconectarPDO();

?>