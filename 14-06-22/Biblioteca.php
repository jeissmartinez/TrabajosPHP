<?php
    include("conexion.php"); 
    $usiarios="SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="section" id="seccion_1">
        <article class="">
            <form action="registro.php" method="POST">
                <label >nombre</label>
                <select name="nombre_f" required>
                    <option value="">Seleccione</option>
                    <php
                        include("conexion.php");
                        $libros = "SELECT * FROM nombre_de_libro";
                        $resultado = mysql_query($conexion, $libros);
                        while($fila = mysql_fetch_array($resultado)){
                            echo '<option value=".$fila[nombre]">"$fila[nombre]"</option>';
                        }
                    ?>
                <input type="submit" value="Guardar">
                <button id="boton1"><a href="consulta.php">consulta bases de datos</a></button>
                    
            </form>
        </article>
    </section>
</body>
</html>