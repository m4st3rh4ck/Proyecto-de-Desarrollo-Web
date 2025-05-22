<?php
include("conexion.php");

// Buscador para tabla DATOS (Agendar consulta)
$busqueda_datos = "";
if (isset($_POST['buscar_datos'])) {
    $busqueda_datos = trim($_POST['campo_datos']);
    $consulta1 = "SELECT * FROM datos WHERE nombre LIKE '%$busqueda_datos%' OR email LIKE '%$busqueda_datos%'";
} else {
    $consulta1 = "SELECT * FROM datos";
}
$resultado1 = mysqli_query($conexion, $consulta1);

// Buscador para tabla CONTACTO (Formulario de contacto)
$busqueda_contacto = "";
if (isset($_POST['buscar_contacto'])) {
    $busqueda_contacto = trim($_POST['campo_contacto']);
    $consulta2 = "SELECT * FROM contacto WHERE nombre LIKE '%$busqueda_contacto%' OR correo LIKE '%$busqueda_contacto%' OR mensaje LIKE '%$busqueda_contacto%'";
} else {
    $consulta2 = "SELECT * FROM contacto";
}
$resultado2 = mysqli_query($conexion, $consulta2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Registros</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h2 style="text-align:center;">Registros de Agendar Consulta</h2>

<div class="form-busqueda">
    <form method="POST">
        <input type="text" name="campo_datos" placeholder="Buscar por nombre o email" value="<?php echo htmlspecialchars($busqueda_datos); ?>">
        <button type="submit" name="buscar_datos">Buscar</button>
    </form>
</div>

<div class="tabla-responsive">
    <table class="tabla-registros">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($resultado1) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado1)) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['telefono']}</td>
                        <td>{$fila['email']}</td>
                        <td>{$fila['mensaje']}</td>
                        <td>
                            <a class='btn-accion' href='editar.php?id={$fila['id']}'>Editar</a>
                            <a class='btn-accion' href='eliminar.php?id={$fila['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6' class='no-registros'>No se encontraron resultados</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<hr><br>

<h2 style="text-align:center;">Registros de Formulario de Contacto</h2>

<div class="form-busqueda">
    <form method="POST">
        <input type="text" name="campo_contacto" placeholder="Buscar por nombre, correo o mensaje" value="<?php echo htmlspecialchars($busqueda_contacto); ?>">
        <button type="submit" name="buscar_contacto">Buscar</button>
    </form>
</div>

<div class="tabla-responsive">
    <table class="tabla-registros">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($resultado2) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado2)) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['telefono']}</td>
                        <td>{$fila['correo']}</td>
                        <td>{$fila['mensaje']}</td>
                        <td>{$fila['fecha']}</td>
                        <td>
                            <a class='btn-accion' href='editar_contacto.php?id={$fila['id']}'>Editar</a>
                            <a class='btn-accion' href='eliminar_contacto.php?id={$fila['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7' class='no-registros'>No se encontraron resultados</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
