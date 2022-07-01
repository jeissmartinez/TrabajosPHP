<?php
include_once 'conexionPDO.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
	}
else
	{
		if($_SESSION['rol'] !=3)
			{
				header('location: loginphp.php');
			}
	}
?>
<html><head></head>
<body>
<div align="center">
	<?php

		$usuario = $_SESSION['nomusuario'];
		$fotosesion = $_SESSION['foto'];
		echo "<font face= impact size= 6> Bienvenid@ <br>Aprendiz  <br>".$usuario."</font><br>";
		echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
	?>
		
</div >
<table border="3" align="center">
	<tr>	
			<th>ID</th>
			<th>NOMBRE</th>
			<th>PASSWORD</th>
			<th>IDROL</th>
			<th>EMAIL</th>

			<th>EDITAR</th>
	</tr>
<?php
$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
$observar = "SELECT * FROM usuarios";
$ejecutar=mysqli_query($conexion,$observar);
	$contador = 0;
	while ($filas=mysqli_fetch_array($ejecutar)) 
	{
		$id =       $filas['id'];
		$usuario =  $filas['nomusuario'];
		$password = $filas['clave'];
		$idrol =    $filas['idrol'];
		$email =    $filas['email'];
		$contador++;
	?>
	<tr align="center">	
			<td><?php echo $id ?></td>
			<td><?php echo $usuario ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $idrol ?></td>
			<td><?php echo $email ?></td>

			<!-- <td><button style="background-color: orange"><a href="aprendiz.php? editar= <?php //echo $id; ?>">Editar</a></td> -->
			<td><button><a href="aprendiz.php? editar= <?php echo $id; ?>">Editar</a></td>
	</tr>
	<?php
	}
	?>
</table>

<?php
if(isset($_GET['editar']))
	{include_once 'editar.php';
	// $editar_id = $_GET['editar'];
	// $consulta = "SELECT * FROM usuarios WHERE id = '$editar_id'";
	// $ejecutar=mysqli_query($conexion,$consulta);
	// $filas=mysqli_fetch_array($ejecutar);
	// 	$id =       $filas['id'];  m     
	// 	$usuario =  $filas['nomusuario'];
	// 	$password = $filas['clave'];
	// 	$idrol =    $filas['idrol'];
	// 	$email =    $filas['email'];
    }
?>
<!-- <div align="center">
	<form method="POST" action="#">
		NOMBRE <input type="text"     name="usuario" value="<?php echo $usuario  ?>"> <br>
		CLAVE  <input type="text" name="clave"   value="<?php echo $password ?>"><br>
		IDROL  <input type="number"   name="idrol"   value="<?php echo $idrol    ?>"><br>
		EMAIL  <input type="email"    name="email"   value="<?php echo $email    ?>"><br>    
		ENVIAR <input type="submit"   name="actualizame" value="Actualizar Datos">
	</form>
</div> -->
<?php
if(isset($_POST['actualizame']))
	{
	$actualizausuario = $_POST['usuario'];
	$actualizaclave   = $_POST['clave'];
	$actualizaidrol   = $_POST['idrol'];
	$actualizaemail   = $_POST['email'];

	$update = "UPDATE usuarios SET nomusuario = '$actualizausuario',clave = ('$actualizaclave'),idrol = '$actualizaidrol',email = '$actualizaemail' WHERE id = '$editar_id'";
	$ejecutar=mysqli_query($conexion,$update);
	if ($ejecutar)
		{
			header("Location: aprendiz.php");
			// echo "<script>
			// 		windows.open('administrador.php')
			// 	 </script> ";
		}
	else
		{
			echo "<script>
								alert ('no se pudo EDITAR')
							 </script> ";
		}
	}
	//unset($_POST['actualizame']);
?>
<div align="center">
	<form action="loginphp.php" method="POST">
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
	</form>
</div>
</body>
</html>