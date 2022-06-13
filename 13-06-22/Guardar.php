<?php
    $conexion = mysqli_connect("localhost", "root", "", "miab") or die("No se pudo conectar a la base de datos");
        echo "Ingresaste sin lio";

    mysqli_query($conexion,"INSERT INTO alumnos(nombre,email,codigo_curso) values('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[codigo_curso])") or die ("Error al guardar sus datos");


?>