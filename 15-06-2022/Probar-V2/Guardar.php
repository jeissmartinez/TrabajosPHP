<?php
    include("conexion.php");
        $nombre=$_POST["nombref"];
        $insertar="INSERT INTO libros(nombre) values($nombre)";
        $resultado=mysqli_query($conexión,$insertar);
            if($resultado){
                echo"<script> alert('registro exitoso');
                window.location.href='biblioteca.php'; </script>";
            } else{
                echo "<script> alert('No se realizó el registro');
                window.history.go(-1);</script>";
            }
?>