<?php
include ("conexion.php");
$usuarios="SELECT * FROM libros";
?>
<html><head></head>

    <body>

        <table border="5">
            <tr>
                <th>nombre</th>
            </tr>
            <?php
            $resultado=mysql_query($conexion,$usuarios);
            while($filas=mysql_fetch_array($resultado))
            {
            ?>
            <tr>
                <td><?php echo $filas["nombre"]?></td>;
            </tr>
                ?>
            </table>
    </body>
</html>