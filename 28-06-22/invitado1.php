<?php
include_once 'conexion.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: login.php');
	}
else
	{
		if($_SESSION['rol'] !=4)
			{
				header('location: login.php');
			}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="styles.css" type="text/css">
	</head>
	<body>
		<?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
		?>
		<div align="center" class="section">
			<?php
			$usuario = $_SESSION['nomusuario'];
			$fotosesion = $_SESSION['foto'];
			
			echo "<font face= impact size= 6> Bienvenid@ <br>Invitad@  <br>".$usuario."</font><br>";
			echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
			?>
		</div>
		<h1 align="center">Consulta de Usuarios</h1>
		<table class ="section">
			<tr>
				<th>Usuarios</th>
				<th>Email</th>
				<th>Clave</th>
			</tr>
			<?php
				$consulta = "SELECT * FROM usuarios";
				$ejecutar=mysqli_query($conexion,$consulta);
				$i=0;
				while($fila=mysqli_fetch_array($ejecutar))
				{
					$usuario=$fila['nomusuario'];
					$email=$fila['email'];
					$clave=$fila['clave'];
					$i++;
				}
			?>
			<tr>
				<td><?php echo $usuario; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $clave; ?></td>
			</tr>
		</table>

		<div align="center" class="section">	
			<form action="login.php" method="POST">
				<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
			</form>
		</div>
	</body>
</html>