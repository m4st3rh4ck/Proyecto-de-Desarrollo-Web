<?php
include("conexion.php");

// Si hay ID por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener datos del registro
    $consulta = "SELECT * FROM contacto WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
}

// Si el formulario fue enviado
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $actualizar = "UPDATE contacto 
                   SET nombre='$nombre', telefono='$telefono', correo='$correo', mensaje='$mensaje'
                   WHERE id=$id";
    mysqli_query($conexion, $actualizar);

    echo "<script>alert('Registro actualizado exitosamente'); window.location.href='admin.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar contacto</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h2 style="text-align:center;">Editar Mensaje de Contacto</h2>

<div class="form-busqueda">
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
        <p><input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required></p>
        <p><input type="text" name="telefono" value="<?php echo $fila['telefono']; ?>" required></p>
        <p><input type="email" name="correo" value="<?php echo $fila['correo']; ?>" required></p>
        <p><textarea name="mensaje" required><?php echo $fila['mensaje']; ?></textarea></p>
        <p><button type="submit" name="actualizar" class="btn-accion">Actualizar</button></p>
    </form>
</div>

</body>
</html>
