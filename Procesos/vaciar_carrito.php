<?php 
session_start();
$_SESSION["carrito"]=0;
header('Location: ../Vistas/micarrito.php');
 ?>