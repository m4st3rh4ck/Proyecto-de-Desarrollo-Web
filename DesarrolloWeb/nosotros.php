<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nosotros</title>
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
        <a href="#" class="logo">Hospital San Gabriel</a>
        <input type="checkbox" id="menu">
        <label for="menu">
            <img src="menu-icono.png" class="menu-icono" alt="Menu">
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
                <h1>Sobre Nosotros</h1>
                <p>Conoce quiénes somos, nuestra historia, valores y misión como empresa.</p>
            </div>
            <div class="header-img">
                <img src="images/nosotros.png" alt="Imagen de nosotros">
            </div>
        </div>
    </section>

    <!-- Sección About -->
    <section class="about">
        <div class="about-img">
            <img src="images/equipo.png" alt="Nuestro equipo">
        </div>
        <div class="about-txt">
            <h2>Nuestra Historia</h2>
            <p>
                Somos una empresa comprometida con la excelencia. Desde nuestros inicios nos hemos enfocado en brindar soluciones tecnológicas de calidad, combinando conocimiento, experiencia y pasión por lo que hacemos.
            </p>
            <p>
                Nuestro equipo está conformado por profesionales dedicados que trabajan en conjunto para alcanzar resultados sobresalientes y crear relaciones duraderas con nuestros clientes.
            </p>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 MiEmpresa. Todos los derechos reservados.</p>
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
