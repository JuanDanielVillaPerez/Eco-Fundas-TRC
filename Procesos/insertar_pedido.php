<?php
session_start();
include 'database.php';
$db=new database();
$db->conectarBD();
$arreglo= $_SESSION["carrito"];
#echo '<pre>'; print_r($arreglo); echo '</pre>';
ini_set('date_timezone', 'America/Mexico_City');
$time=date('Y-m-d,H:i:s',time());
#echo '<pre>'; print_r($time); echo '</pre>';

$iduser = $_SESSION["id"];
$inserta_pedido="insert into Pedido(UsuarioID,Fecha) values('$iduser','$time')";
$db->ejecutaSQL($inserta_pedido);

$fecha_hora="select * from Pedido where Fecha = '$time'";
$fechaq=$db->seleccionar($fecha_hora);
$nfecha=$fechaq->fetch();
$idpedido=$nfecha['PedidoID'];

foreach ($arreglo as $fila) {
	$modeloid=$fila['modelo'];
	$diseñoid=$fila['idimagen'];
	$inserta_md="insert into Modelo_Diseño(ModeloID,DiseñoID) values('$modeloid','$diseñoid');";
	$db->ejecutaSQL($inserta_md);

	$mdid="select * from Modelo_Diseño where ModeloID = '$modeloid' and DiseñoID = '$diseñoid'";
	$mdidq=$db->seleccionar($mdid);
	$nmdid=$mdidq->fetch();
	$idmdid=$nmdid['MDID'];

	$idimg=$fila['idimagen'];
	$precio="select * from Diseños inner join Tipo on Diseños.TipoID=Tipo.TipoID where DiseñoID = '$idimg'";
	$precioq=$db->seleccionar($precio);
	$nprecio=$precioq->fetch();
	$costo=$nprecio['Costo'];

	$cantidad=$fila['cantidad'];

	$insertar_detallep="insert into Detalle_Pedido(PedidoID,MDID,Cantidad,`Precio Unitario`) values('$idpedido','$idmdid','$cantidad','$costo')";
	$db->ejecutaSQL($insertar_detallep);
}
$db->desconectarBD();
$_SESSION["carrito"]=0;
header('Location: ../Vistas/micarrito.php');
?>