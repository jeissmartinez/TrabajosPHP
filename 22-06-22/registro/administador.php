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
        <title>Admin</title>
    </head>

    <body>
        <h1>Administrador</h1>
        <form action="login.php" method="post">
          <?php
          $num1= 5;
          $num2= 5;
          $resultado= $num1 + $num2;
          echo "El primer numero es: 5<br>";
          echo "El segundo numero es: 5<br><br>";
          echo "<b>El resultado de la suma es:</b>".$resultado;
          ?>
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
            
        </form>
    </body>
</html>