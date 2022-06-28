<?php
include_once 'conexionPDO.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
	}
else
	{
		if($_SESSION['rol'] !=4)
			{
				header('location: loginphp.php');
			}
	}
?>
<html><head></head>
<body>
<?php
$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
?>
<div align="center">
	<?php
	$usuario = $_SESSION['nomusuario'];
	$fotosesion = $_SESSION['foto'];
	echo "<font face= impact size= 6> Bienvenid@ <br>Invitad@  <br>".$usuario."</font><br>";
	echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
	?>
</div>

<div align="center">	
	<form action="loginphp.php" method="POST">
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
	</form>
</div>
</body>
</html>