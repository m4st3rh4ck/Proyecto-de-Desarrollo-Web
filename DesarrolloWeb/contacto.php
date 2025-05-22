<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("send_contacto.php"); // Este archivo guardará en la tabla 'contacto'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hospital San Gabriel - Contacto</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contenido {
            text-align: center;
            padding: 100px 20px;
        }
        .formulario-contacto {
            margin: 0 auto;
            width: 80%;
            max-width: 500px;
            text-align: left;
        }
        .formulario-contacto input, .formulario-contacto textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .formulario-contacto button {
            width: 100%;
            padding: 10px;
            background-color: #02B1F4;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .formulario-contacto button:hover {
            background-color: #0290c2;
        }
    </style>
</head>
<body>

<header class="menu">
    <a href="inicio.php" class="logo">Hospital San Gabriel</a>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header>

<section class="contenido">
    <h1>Contáctanos</h1>
    <div class="formulario-contacto">
        <form method="POST">
            <input type="text" name="name" placeholder="Tu nombre" required>
            <input type="text" name="phone" placeholder="Tu teléfono" required>
            <input type="email" name="email" placeholder="Tu correo electrónico" required>
            <textarea name="message" placeholder="Tu mensaje" required></textarea>
            <button type="submit" name="send">Enviar Mensaje</button>
        </form>
    </div>
</section>

</body>
</html>
