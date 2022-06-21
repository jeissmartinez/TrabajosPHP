<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta libros</title>

</head>
    <body><h1>Prestamo de libros</h1>

            <form action="guardar.php" method="post">
              <label>Nombre de libro</label>
              <select name="nombref" required>
              <option value="">Seleccione</option>

              <?php
                include ("conexion.php");
                  $libros= "SELECT *FROM libros";
                  $resultado= mysqli_query($conexion,$libros);
                    
                  while($consulta= mysqli_fetch_array($resultado)){
                      echo'<option value="'.$consulta[nombre].'">'.$consulta[nombre].'</option>';
                  }
                ?>
                </select><br><br>
                <input type="submit" value="Tocame">
                </form>
                <button><a href="consultalibros.php">Consultar libros</a></button>
            
    </body>

</html>
