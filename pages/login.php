<!-- Recibe información de formulario de Inicio de Sesión -->
<?php
    session_start();

    $mail = $_POST['mail'];
    $contraseña = $_POST['contraseña'];

    include("conexion.php");

    $consulta = mysqli_query($conexion, "SELECT id, usuario, mail, contraseña FROM usuarios WHERE mail='$mail'");

    if ($consulta && mysqli_num_rows($consulta) != 0) {

        $respuesta = mysqli_fetch_array($consulta);

        if (password_verify($contraseña, $respuesta['contraseña'])) {

            $_SESSION['id'] = $respuesta['id'];
            $_SESSION['usuario'] = $respuesta['usuario'];
            $_SESSION['mail'] = $respuesta['mail'];

            header("Location: ../index.php");
            exit();

        } else {
            echo "El correo electrónico o la contraseña son incorrectos.";
        }

    } else {
            echo "El correo electrónico o la contraseña son incorrectos.";
        }
?>