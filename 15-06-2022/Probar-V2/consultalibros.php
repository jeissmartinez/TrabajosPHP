<?php

    include("conexion.php");
    
    $usuarios="SELECT * FROM libros";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta libros</title>
    <style>
        .tabla{
            margin-top: 100px;
            margin-left: 700px;
            width: 400px;
            height: 100px;
            background-color: coral;
        }
    </style>
</head>
<body>
    <table class="tabla" border="5">
        <tr>
            <th>Nombres</th>
            <th>Autor</th>
            <th>Editorial</th>
        </tr>
    <?php
        $resultado = mysqli_query ($conexion,$usuarios);
        while($columnas=mysqli_fetch_assoc($resultado)) {
    ?>
        <tr>
            <td><?php echo $columnas["nombre"]; ?></td>
            <td><?php echo $columnas["autor"]; ?></td>
            <td><?php echo $columnas["editorial"]; ?></td>
        </tr>
    <?php
    }
        mysqli_free_result($resultado);
    ?>
    </table>
</body>
</html>