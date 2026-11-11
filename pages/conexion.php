<!-- Conexión con la base de datos -->
<?php
    $conexion = mysqli_connect("localhost", "root", "", "lookbookcinema");
    if (!$conexion){
        die("Falló la conexión" . mysqli_connect_error());
    }
?>