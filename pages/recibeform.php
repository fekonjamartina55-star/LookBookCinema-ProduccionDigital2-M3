<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LookBook Cinema</title>
    </head>

    <body>
        <?php
            $usuario = $_POST['usuario'];
            $mail = $_POST['mail'];
            $contraseña = $_POST['contraseña'];
            $pais = $_POST['pais'];

            include("conexion.php");

            $query1 = "INSERT INTO usuarios (usuario, mail, contraseña, pais) VALUES ('$usuario', '$mail', '$contraseña', '$pais')";
            if (mysqli_query($conexion, $query1)) {
                header("Location: ../index.php"); 
                exit();
            }else {
                echo "Error al enviar datos." . $query1 . "<br>" . mysqli_error($conexion);
            }

            mysqli_close($conexion);
        ?>
    </body>
</html>