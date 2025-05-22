<?php
include("conexion.php");

if (isset($_POST['send'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        $consulta = "INSERT INTO contacto(nombre, telefono, correo, mensaje)
                     VALUES ('$name', '$phone', '$email', '$message')";
                     
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<script>alert('Mensaje enviado correctamente.');</script>";
        } else {
            echo "<script>alert('Error al enviar el mensaje.');</script>";
        }
    }
}
?>
