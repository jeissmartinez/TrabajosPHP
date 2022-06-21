<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
        <style>

        </style>
</head>
<body bg="lightyellow">
    <h1>Préstamo de libros</h1>
    <form action="Guardar.php" method="post">
    <label>Nombre del libro</label>
    <select name="nombref" required>
    <option value="">Seleccione</option>

    <?php
        include("conexion.php");
        $libros="SELECT*FROM nomlibros";
        $resultado=mysqli_query($conexion,$libros);
        while($consulta=mysqli_fetch_array($resultado)){
            echo'<option value="'.$consulta[$nombre].'">'.$consulta[$nombre].'</option>';
        }
    ?>
    </select><br><br>
    <input type="submit" value="tocame">
    </form>
    <button><a href="consultalibros.php">consultar libros </a></button>
</body>
</html>