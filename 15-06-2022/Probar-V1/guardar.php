<?php
    include ("conexion.php")
    $nombre=$_POST["nombref"];
    $insertar="INSERT INTO libros(nombre) values('$nombre')";
    $resultado=mysqli_query($conexion,$insertar);
    
    if ($resultado)
        {
        echo "<script> alert ('Registro Exitoso');
        window.location.href='biblioteca.php'</script>";
        }
    else
        {
        echo "<script> alert ('No se realizo el registro');
        window.history.go(-1);</script>";
        }
?>