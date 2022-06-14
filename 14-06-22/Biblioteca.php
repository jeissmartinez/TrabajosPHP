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
                        
                    ?>
                    <option value="">sobre heroes y tumbas</option>
                    <option value="f">padre rico padre pobre</option>
                    <option value="m">la metamorfosis</option>
                </select>
                <label>autor</label>
                <select name="autor_f" required>
                    <option value="">Seleccione</option>
                    <option value="">ernesto sabato</option>
                    <option value="">Robert Kiyosaki </option>
                    <option value="">Franz Kafka</option>
                </select>
                <label>editorial</label>
                <select name="editorial_f" required>
                    <option value="">Seleccione</option>
                    <option value="">Norma</option>
                    <option value="">Gato Negro</option>
                    <option value="">Planeta</option>
                </select>

                <input type="submit" value="Guardar">
                    
            </form>
        </article>
    </section>
</body>
</html>