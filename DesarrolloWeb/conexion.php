<?php
// Establecer la conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'formulario');

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>
