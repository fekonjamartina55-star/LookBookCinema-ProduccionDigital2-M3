<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil de Película</title>
    </head>

    <body>
        <?php
            include("conexion.php");

            $id = $_GET['id'];

            $consulta = "SELECT * FROM peliculas WHERE id = $id";
            $resultado = mysqli_query($conexion, $consulta) or die("Hubo un error en la consulta. <br>".mysqli_error($conexion));
            $pelicula = mysqli_fetch_assoc($resultado);
        ?>

        <h1><?php echo $pelicula['nombre']; ?></h1>
        <img src="../img/<?php echo $pelicula['imagen']; ?>" alt="Afiche de película" width="300">
        <p>Director: <?php echo $pelicula['director']; ?></p>
        <p>Año: <?php echo $pelicula['año']; ?></p>
        <p>Duración: <?php echo $pelicula['duracion']; ?></p>
        <p>Género: <?php echo $pelicula['genero']; ?></p>
        <p>Sinopsis: <?php echo $pelicula['sinopsis']; ?></p>
    </body>
</html>