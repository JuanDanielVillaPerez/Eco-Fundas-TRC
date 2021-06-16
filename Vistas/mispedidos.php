<?php
session_start();

include '../Procesos/database.php';
$db=new database();
$db->conectarBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis pedidos</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/LOGO.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
	<nav class="navbar navbar-expand-lg navbar-light " style=" background-color: yellow">
		  <a class="navbar-brand" href="#" style="color: black"><img src="../img/LOGO.png" style="width: 100px; height: 100px"><strong>ECO-FUNDAS-TRC</strong></a>
		  <button class="navbar-toggler" style="color: rgba(85,68,51,1.00)" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon" style="background-color: "></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../index.php" style="color: black">INICIO</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../Vistas/Productos.php" style="color: black">PRODUCTOS</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../Vistas/Contacto.php" style="color: black">CONTACTO</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../Vistas/Quienes_Somos.php" style="color: black">NOSOTROS</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../Vistas/Login.php" style="color: black">INICIAR SESION</a>
					</li>
					<li class="nav-item">
					<?php 
					if (isset($_SESSION["Admin"])) 
					{
					?>
					<li class="nav-item dropdown">
        				<a class="nav-link dropdown" href="#" id="navbarDropdown" data-toggle="dropdown" style="color:black;">OPCIONES</a>
        				<div class="dropdown-menu" aria-label-ledby="navbarDropdown" style="background-color:yellow;">
        					<a class="dropdown-item" href="micarrito.php">Mi carrito <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  							<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
							</svg></a>
        					<a class="dropdown-item" href="#">Mis pedidos <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  							<path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
							</svg></a>
        					<div class="dropdown-divider"></div>
        					<a class="dropdown-item" href="Modificar_catalogo.php">Modificar catalogo</a>
        					<a class="dropdown-item" href="Modificar_diseños.php">Modificar diseños</a>
        					<a class="dropdown-item" href="pedidos.php">Pedidos</a>
        				</div>
      				</li>
					<?php 
						echo "<li class='nav-item' style='margin: auto;margin-left: 150px;'>";
						echo "<b>".$_SESSION["Admin"]."</b>";
						echo "</li>";
            				echo "</li>";
            				echo "<li class='nav-item' >";
            				echo "<a class='nav-link' href='../Procesos/cerrar_sesion.php' style='color:black'><svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-box-arrow-in-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  								<path fill-rule='evenodd' d='M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z'/>
  								<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z'/>
  								<path fill-rule='evenodd' d='M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z'/>
								</svg> </a> ";
            				echo "</li>"; 
      					}

      				 ?>
						<?php 
          				if (isset($_SESSION["Usuario"])) 
          				{
          				?>
						<li class="nav-item dropdown">
        					<a class="nav-link dropdown" href="#" id="navbarDropdown" data-toggle="dropdown" style="color:black;">OPCIONES</a>
        					<div class="dropdown-menu" aria-label-ledby="navbarDropdown" style="background-color:yellow;">
        						<a class="dropdown-item" href="micarrito.php">Mi carrito <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  								<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
								</svg></a>
        						<a class="dropdown-item" href="#">Mis pedidos <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  								<path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
								</svg></a>
        					</div>
      					</li>
          				<?php 
          					echo "<li class='nav-item' style='margin: auto;margin-left: 150px;'>";
            				echo "<b>".$_SESSION["Usuario"]."</b>";
            				echo "</li>";
            				echo "</li>";
            				echo "<li class='nav-item'>";
            				echo "<a class='nav-link' href='../Procesos/cerrar_sesion.php' style='color:black'><svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-box-arrow-in-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  								<path fill-rule='evenodd' d='M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z'/>
  								<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z'/>
  								<path fill-rule='evenodd' d='M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z'/>
								</svg> </a> ";
            				echo "</li>"; 
          				}
						 ?>
					
				</ul>
		</div>
</nav>
<br>
<br>
<div class="container">
	<div class="table-responsive">
		<table class="table table-striped|table-bordered|table-hover|table-sm">
			<caption>Mis pedidos</caption> 
			<thead class="thead-light">
				<tr>
					<th>N° de pedido</th>
					<th>Fecha</th>
					<th>Cantidad</th>
					<th>Costo</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Tipo</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody style="background-color: white;">
				<?php 
				$idcliente=$_SESSION["id"];
                $query = "call EcoFundas.Pedidos_x_cliente('$idcliente')";
                $consulta=$db->seleccionar($query);
                $resultado=$consulta->fetchAll();
				foreach($resultado as $fila):?>
					<tr>
						<th><?php echo $fila['PedidoID'];?></th>
						<th><?php echo $fila['Fecha']; ?></th>
						<th><?php echo $fila['Cantidad']; ?></th>
						<th><?php $costo=$fila['Cantidad']*$fila['Costo']; 
						echo "$ ".number_format($costo,2,".",".");?></th>
						<th><?php echo $fila['NombreMarca']; ?></th>
						<th><?php echo $fila['NombreModelo']; ?></th>
						<th><?php echo $fila['Tipo']; ?></th>
						<th><img src="data:image/png;base64,<?php echo base64_encode($fila['Imagen']); ?>" width="200px" height="200px"></th>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>