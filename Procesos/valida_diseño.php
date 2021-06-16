<?php 
include 'database.php';
$db=new database();
$db->conectarBD();

$nombrediseño=$_POST['nombrediseño'];
$tipo=$_POST['tipo'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


$inserta_diseños="insert into Diseños(NombreDiseño,Imagen,TipoID) values('$nombrediseño','$imagen','$tipo')";

$db->ejecutaSQL($inserta_diseños);

$db->desconectarBD();
			
header('Location: ../Vistas/Modificar_diseños.php');

?>