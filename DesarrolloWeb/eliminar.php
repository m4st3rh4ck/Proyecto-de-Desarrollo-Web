<?php
include 'conexion.php';

// Verificar que haya recibido un ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convertir a entero por seguridad

    // Consulta para eliminar el registro
    $sql = "DELETE FROM datos WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        // Si se eliminó correctamente, redirigir de regreso a admin.php
        header("Location: admin.php");
        exit();
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "ID no especificado.";
}
?>
