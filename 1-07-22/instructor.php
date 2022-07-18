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
        <title>Instructor</title>
    </head>

    <body>
        <h1>Instructor</h1>
      <div>
        <form action="#" method="post">
          <label>Nombre</label><input type="text" name="nombre"><br>
          <label>Clave</label><input type="Password" name="Clave"><br>
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
          $db = new Database();
          $query = $db->connect()->prepare('INSERT INTO usuarios (nombre, clave, correo, id_rol) VALUES (:nombre, :clave, :correo, :idrol)');
          $query->execute(['nombre' =>$nombre, 'clave'=>$clave, 'correo'=>$correo, 'idrol'=>$idrol]);
        }
      ?>
        </form>
        <form action="login.php" method="post">
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
        </form>
    </body>
</html>