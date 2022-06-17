<?php

    include("conexion.php");
    
    $usuarios="SELECT *FROM libros";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <table border="5">
        <tr>
            <th>Nombres</th>
            <th>Autor</th>
        </tr>
    <?php
        $resultado = mysqli_query($Con,$usuarios);
        while($columnas=mysqli_fetch_assoc($resultado)) {
    ?>
        <tr>
            <td><?php echo $columnas["nombre"]; ?></td>
            <td><?php echo $filas["autor"]?></td>
        </tr>
    <?php
    }
        mysqli_free_result($resultado);
    ?>
    </table>
</body>
</html>