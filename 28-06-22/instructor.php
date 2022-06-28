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
      </div>
    </body>
</html>