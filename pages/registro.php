<!-- Recibe información del formulario de Registro -->
<?php
    $usuario = $_POST['usuario'];
    $mail = $_POST['mail'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
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