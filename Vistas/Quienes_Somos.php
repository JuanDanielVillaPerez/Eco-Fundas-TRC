<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Quienes somos</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/LOGO.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>	
</head>
<body style="background-color: black">
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
        					<a class="dropdown-item" href="mispedidos.php">Mis pedidos <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
          				{?>
						<li class="nav-item dropdown">
        					<a class="nav-link dropdown" href="#" id="navbarDropdown" data-toggle="dropdown" style="color:black;">OPCIONES</a>
        					<div class="dropdown-menu" aria-label-ledby="navbarDropdown" style="background-color:yellow;">
        						<a class="dropdown-item" href="micarrito.php">Mi carrito <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  								<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
								</svg></a>
        						<a class="dropdown-item" href="mispedidos.php">Mis pedidos <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
	
	<img src="../img/Preguntas_F.png" class="img-fluid" width="2000" alt="Responsive image">
<br>
<br>
	<br>
<div align="center">
<div class="accordion col-xl-10" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne" style="background-color: yellow; color: black">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" style="background-color: yellow; color: black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿ES SEGURO Y CONFIABLE COMPRAR EN ECO-FUNDAS?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
        Claro, puedes comprar en ECO-FUNDAS con toda tranquilidad, somos una empresa establecida con más de 5 Años en la venta de productos en línea con muchos clientes satisfechos, 
		todos nuestros pagos con tarjeta , que mantienen tu dinero seguro hasta tener el producto en tus manos.
		<br><br>
		Te invitamos a visitarnos en Facebook y consultar la sección quienes somos.
      </div>
    </div>
  </div>
	<BR>
  <div class="card">
    <div class="card-header" id="headingTwo" style="background-color: yellow; color: black" >
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: yellow; color: black">
          ¿CÓMO ENCONTRAR Y COMPRAR UN PRODUCTO?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
        Primeramente iniciamos sesión, despues que iniciemos sesión nos dirigimos a el apartado de PRODUCTOS y 
		  escogemos el diseño que queramos, y le damos en comprar que nos dirigira a el carrito y por último
		  ingresaremos nuestro número de tarjeta de débito/credito y damos en comprar lo cual nos generara un ticket.
      </div>
    </div>
  </div>
		<br>
  <div class="card">
    <div class="card-header" id="headingThree" style="background-color: yellow; color: black">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: yellow; color: black">
          ¿CÓMO CREAR UNA CUENTA?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
        Para crear una cuenta en ECO-FUNDAS, nos dirigimos a el apartado de iniciar sesión y abajo nos 
		  aparecera crear una cuenta, donde procederemos a dar click y rellenamos nuestros datos personales.
      </div>
    </div>
  </div>
		<br>
	  <div class="card">
    <div class="card-header" id="headingFour " style="background-color: yellow; color: black">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: yellow; color: black" >
          ¿CUÁNTO TOMARÁ EN LLEGAR MI PEDIDO?
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
        El tiempo estimado de entrega de un artículo puede variar dependiendo si su compra es en temporada alta de ventas, 
		promociones o si es un tipo de funda personalizada. Las entregas a domicilio tardan de 1 a 2 días habiles en el domocilo que escogiste. 
		
      </div>
    </div>
  </div>
		<br>
	  <div class="card">
    <div class="card-header" id="headingFive"style="background-color: yellow; color: black">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background-color: yellow; color: black">
          ¿MANEJAN PRECIOS DE MAYOREO?
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
       Si manejamos precios de mayoreo, puedes encontrarlos en nuestra pagina de facebook encontrada en la seccion de contacto
      </div>
    </div>
  </div>
		<br>
	  <div class="card">
    <div class="card-header" id="headingSix" style="background-color: yellow; color: black">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="background-color: yellow; color: black">
          ¿QUÉ PASA SI NO ESTOY CUANDO LLEGUE MI PEDIDO?
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample" style="background-color: black; color: white">
      <div class="card-body">
        La persona entrega tu pedido hasta la puerta de tu casa, en caso de que tu no te encuentres, puede recibirlo alguien más siempre y cuando se encuentre dentro de 
		tu domicilio, en caso de no encontrar a nadie, la paquetería te dejará un aviso de notificación y volverá a intentar hacer la entrega, en su siguiente ruta de la zona.
      </div>
    </div>
  </div>
	 <br> 
  </div>
</div>
</div>
 <div align="center">
<footer class="page-footer font-small blue pt-4"  >
	  <div class="container-fluid text-center text-md-left"  >
			<div class="row">
				  <div class="col-xl-12" align="center" >
						<h5 class="text-uppercase" style="color: yellow">PAGINA CREADA POR </h5>
							<p style="color: yellow"> José Luis Ibarra Llamas.
								<br><a href="mailto:luisitoibarra@live.com.mx">&nbsp;&nbsp;luisitoibarra@live.com.mx</a></p>
							<p style="color: yellow">Juan Daniel Villa Perez. <br>
								<a href="mailto:juandanielvillaperez@gmail.com">&nbsp;&nbsp;juandanielvillaperez@gmail.com</a></p>
							<p style="color: yellow">Daniel Escajeda Calvillo.<br>
								<a href="mailto:19170054@utt.edu.mx">&nbsp;&nbsp;19170054@utt.edu.mx</a></p>	
				  </div>
			  </div>
		</div>
	  	<div class="footer-copyright text-center py-3" style="color: white">© 2020 Copyright: ECO-FUNDAS
	  </div>
</footer>
	</div>
</body>
</html>

