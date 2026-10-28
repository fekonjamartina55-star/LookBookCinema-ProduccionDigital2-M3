<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LookBook Cinema</title>
    </head>

    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "lookbookcinema");
            if (!$conexion){
                die("Falló la conexión" . mysqli_connect_error());
            }
        ?>
    </body>
</html>