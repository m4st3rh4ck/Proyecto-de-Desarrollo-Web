<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro
    $consulta = "DELETE FROM contacto WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script>alert('Registro eliminado correctamente'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar el registro'); window.location.href='admin.php';</script>";
    }
} else {
    echo "<script>alert('ID no válido'); window.location.href='admin.php';</script>";
}
?>
