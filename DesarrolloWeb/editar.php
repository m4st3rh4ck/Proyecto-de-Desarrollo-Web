<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexion.php';

// Verificar si se recibe el ID por GET
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Consulta para obtener los datos actuales
    $sql = "SELECT * FROM datos WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
    } else {
        echo "Registro no encontrado.";
        exit();
    }
} else {
    echo "ID no especificado.";
    exit();
}

// Si se envía el formulario (por POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

    $sql_update = "UPDATE datos SET 
                    nombre = '$nombre', 
                    email = '$email', 
                    telefono = '$telefono', 
                    mensaje = '$mensaje'
                   WHERE id = $id";

    if (mysqli_query($conexion, $sql_update)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error al actualizar: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilo básico para el formulario de edición */
        .form-editar {
            width: 500px;
            margin: 100px auto;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background: #FAFAFA;
        }
        .form-editar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-editar input, .form-editar textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .form-editar button {
            width: 100%;
            padding: 10px;
            background-color: #02B1F4;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-editar button:hover {
            background-color: #0290c2;
        }
    </style>
</head>
<body>

<div class="form-editar">
    <h2>Editar Registro</h2>
    <form method="POST">
        <input type="text" name="nombre" value="<?php echo isset($fila['nombre']) ? htmlspecialchars($fila['nombre']) : ''; ?>" required>
        <input type="email" name="email" value="<?php echo isset($fila['email']) ? htmlspecialchars($fila['email']) : ''; ?>" required>
        <input type="text" name="telefono" value="<?php echo isset($fila['telefono']) ? htmlspecialchars($fila['telefono']) : ''; ?>" required>
        <textarea name="mensaje" required><?php echo isset($fila['mensaje']) ? htmlspecialchars($fila['mensaje']) : ''; ?></textarea>
        <button type="submit">Actualizar</button>
    </form>
</div>

</body>
</html>
