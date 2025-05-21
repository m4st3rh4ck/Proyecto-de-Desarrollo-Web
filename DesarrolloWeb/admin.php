<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="admin.css">

</head>
<body>

<header class="menu">
    <a href="index.php" class="logo">Inicio</a>
    <nav class="navbar">
        <ul>
            <li><a href="admin.php">Panel Admin</a></li>
        </ul>
    </nav>
</header>

<section style="margin-top: 100px;">
    <h2 style="text-align:center; margin-bottom:30px;">Registros en la Base de Datos</h2>

    <div class="form-busqueda">
        <form method="GET" action="admin.php">
            <input type="text" name="busqueda" placeholder="Buscar por nombre o email">
            <button type="submit">Buscar</button>
        </form>
    </div>

    <?php
    if (isset($_GET['busqueda']) && !empty(trim($_GET['busqueda']))) {
        $busqueda = mysqli_real_escape_string($conexion, $_GET['busqueda']);
        $sql = "SELECT * FROM datos WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'";
    } else {
        $sql = "SELECT * FROM datos";
    }

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo '<div class="tabla-responsive">';
        echo '<table class="tabla-registros">';
        echo '<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Mensaje</th><th>Acciones</th></tr>';
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>' . $fila['id'] . '</td>';
            echo '<td>' . htmlspecialchars($fila['nombre']) . '</td>';
            echo '<td>' . htmlspecialchars($fila['email']) . '</td>';
            echo '<td>' . htmlspecialchars($fila['telefono']) . '</td>';
            echo '<td>' . htmlspecialchars($fila['mensaje']) . '</td>';
            echo '<td>
                    <a href="editar.php?id=' . $fila['id'] . '" class="btn-accion">Editar</a>
                    <a href="eliminar.php?id=' . $fila['id'] . '" class="btn-accion" onclick="return confirm(\'¿Seguro que deseas eliminar este registro?\')">Eliminar</a>
                  </td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>'; // Cerramos div tabla-responsive
    } else {
        echo '<div class="no-registros">No se encontraron resultados.</div>';
    }
    ?>
</section>

</body>
</html>
