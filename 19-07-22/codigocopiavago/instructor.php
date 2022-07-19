  <?php
  include_once 'conexion.php';
  session_start();
  if (!isset($_SESSION['rol']))
  {
    header('Location: login.php');
  }
  else
  {
    if ($_SESSION['rol'] !=2)
    {
    header('Location: login.php');
    }
  }
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      
    </head>
    <body>
      <center>
        <?php
      $conexion=mysqli_connect('localhost','root','','crud') or die ('Problemas en la conexion');
      ?>
        <div align="center">
          <?php
          $usuario = $_SESSION['nomusuario'];
          $fotosesion = $_SESSION['foto'];
          echo "<font face= impact size= 6> Bienvenid@ <br>Instructor@  <br>".$usuario."</font><br>";
          echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
          ?>
        </div>
    
          <br><br>

          <div align="center">
              <form method="POST" action="#">
                NOMBRE <input type="text"   name="usuario"><br>
                CLAVE  <input type="text"   name="clave"><br>
                IDROL  <input type="number" name="idrol"><br>
                EMAIL  <input type="email"  name="email"><br><br><br>
                ENVIAR <input type="submit" name="insertar" value="Insertar Datos"><br><br><br>
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
  //$actualizaidrol   = $_POST['idrol'];
  $actualizaemail   = $_POST['email'];

  $update = "UPDATE usuarios SET nomusuario = '$actualizausuario',clave = ('$actualizaclave'),email = '$actualizaemail' WHERE id = '$editar_id'";
  $ejecutar=mysqli_query($conexion,$update);
  if ($ejecutar)
    {
      header("Location: aprendiz.php");
      // echo "<script>
      // 		windows.open('administrador.php')
      // 	 </script> ";
      //,idrol = '$actualizaidrol' ESTO VA EL LA LINEA 98 ANTES DEL EMAIL
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
                  <form action="login.php" method="post">
            <br><br><br><input type="submit" value="CerrarSesion" name="cerrar_sesion">
            </center>
        </form>
    </body>
  </html>
