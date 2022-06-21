<?php
    $nombreservidor="localhost";
    $nombreusuario="root";
    $contrasena="";
    $basededatos="biblioteca";
    $conexion=mysqli_connect($nombreservidor,$nombreusuario,$contrasena,$basededatos);

    echo '<body style="background-color:lightyellow">';
    echo"Realizaste bien la conexión";
?>