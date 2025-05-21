<?php
include("send.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesarrolloWeb</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <div class="menu container">
        <a href="inicio.php" class="logo">Hospital San Gabriel</a>

        <input type="checkbox" id="menu" />
        
        <label for="menu" id="menu-btn">
            <img src="images/menu.png" class="menu-icono" alt="menu">
        </label>

        <nav class="navbar">
            <ul>
                <li><a href ="index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>

    </div>

    <div class="header-content container">
        <div class="header-txt">
            <h1>Medical Center</h1>
            <p>En el Hospital San Gabriel brindamos atención médica de excelencia con un enfoque humano y personalizado. Nuestro equipo está comprometido con tu bienestar y el de tu familia.</p>
            <a href="servicios.php" class="btn-1">Información</a>
        </div>
        <div class="header-img">
            <img src="images/left.png" alt="">
        </div>
    </div>
</header>

<section class="about container">
    <div class="about-img">
        <img src="images/about.png" alt="">
    </div>
    <div class="about-txt">
        <h2>Nosotros</h2>
        <p>Somos una institución médica privada dedicada a ofrecer servicios de salud integrales con los más altos estándares de calidad. Contamos con tecnología de vanguardia y un equipo multidisciplinario altamente capacitado.</p>
        <br>
        <p>En el Hospital San Gabriel creemos que la salud es un derecho fundamental, por ello trabajamos día a día para garantizar una atención accesible, ética y profesional a todos nuestros pacientes.</p>
    </div>
</section>

<main class="servicios">
    <h2>Servicios</h2>

    <div class="servicios-content container">
        <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>Pediatría</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-stethoscope"></i>
            <h3>Ginecología</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-bed-pulse"></i>
            <h3>Dermatología</h3>
        </div>
        <div class="servicio-1">
            <i class="fa-solid fa-hospital"></i>
            <h3>Cardiología</h3>
        </div>
    </div>
</main>

<section class="formulario container">
    <form method="post" autocomplete="off">
        <h2>Agenda Consulta</h2>

        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="Teléfono Celular">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-container">
                <textarea name="message" placeholder="Detalles de la consulta"></textarea>
            </div>

            <input type="submit" name="send" class="btn" onClick="myFunction()">
        </div>
    </form>
</section>

<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <a href="inicio.php" class="logo">Hospital San Gabriel</a>
        </div>
        <div class="link">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Script para redireccionar después del formulario -->
<script>
    function myFunction() {
        window.location.href = "http://localhost/DesarrolloWeb";
    }
</script>

<!-- Script para abrir/cerrar el menú -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const navbar = document.querySelector('.navbar');
    const checkbox = document.getElementById('menu');

    menuBtn.addEventListener('click', function () {
        if (navbar.style.display === 'flex') {
            navbar.style.display = 'none';
            checkbox.checked = false;
        } else {
            navbar.style.display = 'flex';
            checkbox.checked = true;
        }
    });
</script>

</body>
</html>
