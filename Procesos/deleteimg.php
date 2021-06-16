<?php 
include 'database.php';
$db=new database();
$db->conectarBD();
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	echo '<pre>'; print_r($id); echo '</pre>';
	$borrar_diseño="DELETE FROM `EcoFundas`.`Diseños` WHERE (`DiseñoID` = '$id');";

	$db->ejecutaSQL($borrar_diseño);

	$db->desconectarBD();

	header('Location: ../Vistas/Modificar_diseños.php');
	
}
 ?>