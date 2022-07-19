<?php
include_once 'conexion.php';
  session_start();
  if (!isset($_SESSION['rol']))
  {
    header('Location: login.php');
  }
  else
  {
   if ($_SESSION['rol'] !=1)
   {
    header('Location: login.php');
   }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Administrador</title>
    </head>

    <body bgcolor= "#92FEE9">
      <center>
        <form action="login.php" method="post">
        <div align="center">
	<?php
	$usuario = $_SESSION['nomusuario'];
	$fotosesion = $_SESSION['foto'];
	echo "<font face= impact size= 6> Bienvenid@ <br>Administrador@  <br>".$usuario."</font><br>";
	echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
	?>
</div>
<?php	
          $num1= 5;
          $num2= 5;
          $resultado= $num1 + $num2;
          echo "El primer numero es: 5<br>";
          echo "El segundo numero es: 5<br><br>";
          echo "<b>El resultado de la suma es:</b>".$resultado;
          ?>
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
            </center>
        </form>
    </body>
</html>