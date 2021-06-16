<?php 

class database{
	private $PDOlocal; 
	private $user="root";
	private $password="";
	private $server="mysql:host=localhost; dbname=EcoFundas";

	function conectarBD(){
		try {
			$this->PDOlocal= new PDO($this->server,$this->user,$this->password);	
		} 
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function desconectarBD(){
		try {
			$this->PDOlocal= null;
		} 
		catch (Exception $e) {
			echo $e->getMessage();		
		}
	}

	function cerrarsesion()
	{
		session_start();
		session_destroy();
		header("Location:../index.php");
	}

	function verifica_login($correo,$contra){
		try {
			$pase=0;
			$verify=0;
			$user=0;
			$query="select * from Usuario where Correo='$correo'";

			$consulta=$this->PDOlocal->query($query);

			while($registro= $consulta->fetch(PDO::FETCH_ASSOC))
			{
				$user = $registro['Nombres'];
				$id=$registro['UsuarioID'];
				if (password_verify($contra, $registro['Contrasena']))
				{
					$pase++;		
				}
				if ($registro['RolID'] == 1)
				{
					$verify++;
				}
			}
			if ($pase>0) {
				session_start();
				$_SESSION["id"]=$id;
				if ($verify>0) {
					$_SESSION["Admin"]=$user;
					echo "<div class='alert alert-success'>";
					echo "<h2 align='center'>Bienvenido administrador ".$_SESSION["Admin"]."</h2>";
					echo "</div>";
					header("refresh:2; ../index.php");
				}
				else{
					$_SESSION["Usuario"]=$user;
					echo "<div class='alert alert-success'>";
					echo "<h2 align='center'>Bienvenido ".$_SESSION["Usuario"]."</h2>";
					echo "</div>";
					header("refresh:2; ../index.php");
				}
			}
			else{
				echo "<div class='alert alert-danger'>";
				echo "<h2 align='center'>Correo o contraseña incorrecto </h2>";
				echo "</div>";
				header("refresh:2; ../Vistas/Login.php");
			}
		} 
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function seleccionar($query){
		try {
			$resultado=$this->PDOlocal->query($query);
			return $resultado;	
		} 
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function ejecutaSQL($query){
		try{
			$this->PDOlocal->query($query);		
		} 
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

 ?>