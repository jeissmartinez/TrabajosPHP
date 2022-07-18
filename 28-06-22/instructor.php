<?php
include_once 'conexion.php';
  session_start();
  if (!isset($_SESSION['rol']))
  {
    header('Location: login.php');
  }
  else
  {
    if ($_SESSION['rol'] !=2){
      header('Location: login.php');
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <title>Instructor</title>
    </head>

    <body>
      <?php
      $conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
      ?>
      
      <div align="center" class="section">
        <?php
        $usuario = $_SESSION['nomusuario'];
        $fotosesion = $_SESSION['foto'];
        $email = $_SESSION['email'];

			echo "<font face= impact size= 5> Bienvenid@ <br>Invitad@  <br>".$usuario."</font><br>";
      echo "<font face= impact size= 5> Su correo es: ".$email."</font><br>";	
			echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
		
        ?>
      </div>

      <div align="center" class="section">	
        <form action="login.php" method="POST">
          <input type="submit" name="cerrar_sesion" value="CERRAR SESION">
        </form>
        <h1>Instructor</h1>
      <div>
        <form action="#" method="post">
          <label>Nombre</label><input type="text" name="nombre"><br>
          <label>Clave</label><input type="Password" name="clave"><br>
          <label>Correo</label><input type="text" name="correo"><br>
          <label>ID_Rol</label><input type="number" name="idrol"><br>
          <input type="submit" value="Insertar datos" name="insertar">
        </form>        
      </div>
      <?php
        if (isset($_POST['Insertar'])) {
          $nombre = $_POST['nombre'];
          $clave = $_POST['Clave'];
          $correo = $_POST['correo'];
          $idrol = $_POST['idrol'];
          $Insertar ='INSERT INTO usuarios (nombre, clave, correo, id_rol) VALUES (:nombre, :clave, :correo, :idrol)';
          $ejecutar=mysqli_query($conexion, $Insertar);
          if ($ejecutar) {
            echo "<script>window.open('instructor.php')</script>";
        }
      }
      ?>
        </form>
        <form action="login.php" method="post">
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
        </form>
      </div>
    <?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
		?>
		</div>
		<?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
		?>
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