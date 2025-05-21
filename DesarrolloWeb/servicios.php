<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hospital San Gabriel - Servicios</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!-- Menú de navegación -->
<header class="menu">
    <a href="index.php" class="logo">Hospital San Gabriel</a>
    <input type="checkbox" id="menu">
    <label for="menu">
        <img src="menu-icono.png" class="menu-icono" alt="Menú">
    </label>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header>

<!-- Encabezado -->
<section class="header">
    <div class="header-content">
        <div class="header-txt">
            <h1>Nuestros Servicios</h1>
            <p>Atención médica integral con especialistas en distintas áreas de la salud.</p>
        </div>
        <div class="header-img">
            <img src="images/servicios.png" alt="Servicios Médicos Hospital San Gabriel">
        </div>
    </div>
</section>

<!-- Sección de servicios -->
<section class="servicios">
    <h2>Especialidades Médicas</h2>
    <div class="servicios-content">
        <div class="servicio-1">
            <h3>👶 Pediatría</h3>
            <p>Atención especializada para la salud de los niños, desde recién nacidos hasta adolescentes.</p>
        </div>
        <div class="servicio-1">
            <h3>👩‍⚕️ Ginecología</h3>
            <p>Servicios integrales para la salud de la mujer en todas sus etapas.</p>
        </div>
        <div class="servicio-1">
            <h3>🧴 Dermatología</h3>
            <p>Tratamiento de afecciones de la piel, cabello y uñas con tecnología de vanguardia.</p>
        </div>
        <div class="servicio-1">
            <h3>❤️ Cardiología</h3>
            <p>Diagnóstico y seguimiento de enfermedades cardiovasculares con atención personalizada.</p>
        </div>
    </div>
</section>

<!-- Llamado a la acción -->
<section class="formulario" style="padding-top: 100px;">
    <div style="text-align: center;">
        <h2 style="margin-bottom: 30px;">¿Necesitas atención médica?</h2>
        <a href="contacto.php" class="btn">¡Agenda tu Consulta!</a>
    </div>
</section>

<!-- Pie de página -->
<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2025 Hospital San Gabriel. Todos los derechos reservados.</p>
        <div class="link">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
