<?php
    $nombreservidor="localhost";
    $nombreusuario="root";
    $contrasena="";
    $basededatos="biblioteca";
    $conexion="mysqli_connect($nombreservidor,$nombreusuario,$contrasena,$basededatos)";

    echo"Realizaste bien la conexión";
?>