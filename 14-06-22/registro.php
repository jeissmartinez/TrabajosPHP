<?php
    include("conexion.php");
    $nombre =$_POST['nombre_f'];
    $autor =$_POST['autor_f'];
    $editorial =$_POST['editorial_f'];
    $insertar="INSERT INTO libros (nombre,autor,editorial) VALUES ('$nombre','$autor','$editorial')";
    $resultado=mysqli_query($conexion,$insertar);
    if($resultado){
        echo "<script>alert('Registro exitoso');
        window.location.href='Biblioteca.php';</script>";
    }
    else{
        echo "<script>alert('Registro fallido');
        window.history.go(-1);</script>";
    }