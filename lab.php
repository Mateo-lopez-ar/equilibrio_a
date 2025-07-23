<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Laboratorio clínico - Equilibrio Animal</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ccebea;
      margin: 0;
      padding: 0;
      color: #333;
    }

    header {
      background-color: #2bb2a2;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
    }

    header .logo-container img {
      height: 80px;
      width: 80px;
      border-radius: 50%;
    }

    header h1 {
      margin: 0;
      font-size: 2em;
      flex: 1;
      text-align: center;
    }

    nav {
      background-color: #23988b;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    nav li {
      position: relative;
    }

    nav a {
      display: block;
      padding: 14px 20px;
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      background-color: #1e8176;
    }

    .dropdown:hover .submenu {
      display: block;
    }

    .submenu {
      display: none;
      position: absolute;
      background-color: #1e8176;
      top: 100%;
      left: 0;
      min-width: 200px;
      z-index: 1000;
    }

    .submenu li a {
      padding: 12px 16px;
      color: white;
    }

    .submenu li a:hover {
      background-color: #15645b;
    }

    .contenido {
      max-width: 1100px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .contenido h2 {
      font-size: 2.5em;
      color: #2bb2a2;
      margin-bottom: 20px;
      text-align: center;
    }

    .contenido p {
      font-size: 1.1em;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .img-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin: 30px 0;
      justify-content: center;
    }

    .img-container img {
      width: 100%;
      max-width: 480px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .beneficios {
      background-color: #e1f2f1;
      border-left: 6px solid #23988b;
      padding: 20px 30px;
      border-radius: 10px;
      margin-top: 30px;
    }

    .beneficios h3 {
      margin-top: 0;
      color: #23988b;
    }

    .beneficios ul {
      list-style: disc inside;
      line-height: 1.6;
    }

    footer {
      background-color: #2bb2a2;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        display: none;
      }

      nav ul.show {
        display: flex;
      }

      .menu-toggle {
        display: block;
        background-color: #23988b;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1.2em;
        width: 100%;
        text-align: left;
      }
    }

    .menu-toggle {
      display: none;
    }
  </style>
</head>
<body>

<header>
  <div class="logo-container">
    <a href="index.php">
      <img src="img/logo.png" alt="Logo Equilibrio Animal" />
    </a>
  </div>
  <h1>Equilibrio Animal</h1>
  <div style="width: 80px;"></div>
</header>

<nav>
  <button class="menu-toggle" onclick="toggleMenu()">☰ Menú</button>
  <ul id="navMenu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li class="dropdown">
      <a href="servicios.php" onclick="toggleSubmenu(event)">Servicios ▾</a>
      <ul class="submenu">
        <li><a href="Consulta_Veterinaria.php">Consulta Veterinaria</a></li>
        <li><a href="Urgencias_Veterinaria_24_horas.php">Urgencias 24h</a></li>
        <li><a href="Cirugias_y_Desparasitacion.php">Cirugías y Desparasitación</a></li>
        <li><a href="Adopciones_Responsables.php">Adopciones</a></li>
        <li><a href="Laboratorio_Clinico_Veterinario.php">Laboratorio Clínico</a></li>
      </ul>
    </li>
    <li><a href="adopciones.php">Adopciones</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="citas.php">Citas</a></li>
    <li>
      <?php if (isset($_SESSION['usuario'])): ?>
        <a href="logout.php">Cerrar Sesión</a>
      <?php else: ?>
        <a href="login.php">Iniciar Sesión</a>
      <?php endif; ?>
    </li>
  </ul>
</nav>

<section class="contenido">
  <h2>Laboratorio clínico</h2>

  <p>
    En <strong>Equilibrio Animal</strong>, contamos con equipos de análisis de laboratorio e imagenología de tecnología de punta, 
    proporcionando equipos ultramodernos para la temprana detección de posibles trastornos patológicos o clínicos.

  </p>

  <div class="img-container">
    <img src="img/res.jpg" alt="Equipo realizando cirugía veterinaria">
    <img src="img/xray.jpeg" alt="Equipo realizando cirugía veterinaria">
   
  </div>

  <p>
    Contando con resonancias magnéticas, rayos x, pruebas de laboratorio, tomografía, optometría, entre otros
  </p>

  
</section>

<footer>
  &copy; 2025 Equilibrio Animal - Todos los derechos reservados.
</footer>

<script>
  function toggleMenu() {
    const menu = document.getElementById('navMenu');
    menu.classList.toggle('show');
  }

  function toggleSubmenu(event) {
    event.preventDefault();
    const submenu = event.target.nextElementSibling;
    if (submenu) {
      submenu.classList.toggle('show');
    }
  }
</script>

</body>
</html>

