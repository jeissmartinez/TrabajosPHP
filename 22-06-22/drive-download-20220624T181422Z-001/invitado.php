<?php
include_once 'conexion.php';
  session_start();
  if (!isset($_SESSION['rol']))
  {
    header('Location: login.php');
  }
  else
  {
    if ($_SESSION['rol'] !=4)
    {
    header('Location: login.php');
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Invitado</title>
    </head>

    <body>
        <h1>Invitado</h1>
        <form action="login.php" method="post">
        <?php
          $num1= 10;
          $num2= 5;
          $resultado= $num1 / $num2;
          echo "El primer numero es: 10<br>";
          echo "El segundo numero es: 5<br><br>";
          echo "<b>El resultado de la division es:</b>".$resultado;
          ?>
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
        </form>
    </body>
</html>