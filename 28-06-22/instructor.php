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
        <form action="#" method="POST">
          <label>Nombre</label>
            <input type="text" name="usuario"><br>
          <label>Clave</label>
            <input type="Password" name="clave"><br>
          <label>Correo</label>
            <input type="email" name="email"><br>
          <label>ID_Rol</label>
            <input type="number" name="idrol"><br>
          <input type="submit" value="Insertar" name="insertar">
        </form>        
      </div>
              <?php

              if(isset($_POST['insertar']))
              {
                $usuario = $_POST['usuario'];
                $clave =   $_POST['clave'];
                $idrol =   $_POST['idrol'];
                $email =   $_POST['email'];
            
                $insertar = "INSERT INTO usuarios(nomusuario,clave,idrol,email) VALUES ('$usuario','$clave','$idrol','$email')";
                $ejecutar=mysqli_query($conexion,$insertar);echo "hola";
                if($ejecutar)
                {     
                  echo "<script>
                    windows.open('instructor.php');
                    </script>";
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
		
		<div align="center" class="section">	
			<form action="login.php" method="POST">
				<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
			</form>
		</div>
    </body>
</html>