<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LookBook Cinema</title>
    </head>

    <body>
        <?php
            include("conexion.php");

            $sql = "SELECT * FROM peliculas";

            $busqueda = $_GET['busqueda'] ?? '';
            $sql .= " WHERE nombre LIKE '%$busqueda%' OR director LIKE '%$busqueda%' OR año LIKE '%$busqueda%' OR genero LIKE '%$busqueda%'";

            $resultado = mysqli_query($conexion, $sql) or die("Hubo un error en la consulta. <br>".mysqli_error($conexion));

            echo "Cantidad de resultados: " . mysqli_num_rows($resultado);

            echo "<ul>";
            for($i=0; $i<mysqli_num_rows($resultado); $i++){
                $fila = mysqli_fetch_assoc($resultado);
                echo "<li>" . "<a href='detalle.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a></li>";
            }
            echo "</ul>";

            mysqli_close($conexion);
        ?>
    </body>
</html>