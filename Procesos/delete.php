<?php 
include 'database.php';
$db=new database();
$db->conectarBD();
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$borrar_modelo="delete from `EcoFundas`.`Modelo` where (`ModeloID` = '$id')";

	$db->ejecutaSQL($borrar_modelo);

	$db->desconectarBD();

	header('Location: ../Vistas/Modificar_catalogo.php');
	
}
 ?>