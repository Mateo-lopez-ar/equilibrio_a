<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cirugías y Desparasitación - Equilibrio Animal</title>
 <link rel="stylesheet" href="styles.css">
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
        <li><a href="Consulta_v.php">Consulta Veterinaria</a></li>
        <li><a href="Urgencias.php">Urgencias Veterinarias 24 Horas</a></li>
        <li><a href="cirugias.php">Cirugías y Desparasitación</a></li>
        <li><a href="Adopta.php">Adopciones Responsables</a></li>
        <li><a href="Laboratorio.php">Laboratorio Clínico Veterinario</a></li>
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
  <h2>Cirugías y Desparasitación</h2>

  <p>
    En <strong>Equilibrio Animal</strong>, contamos con una moderna área quirúrgica equipada para realizar una amplia gama de procedimientos, desde esterilizaciones hasta cirugías correctivas y de emergencia.
    Nuestro equipo de profesionales aplica protocolos de anestesia seguros y realiza seguimientos posoperatorios personalizados.
  </p>

  <div class="img-container">
    <img src="img/cirugia.jpg" alt="Equipo realizando cirugía veterinaria">
    <img src="img/desparasitacion.jpg" alt="Veterinario aplicando desparasitación">
  </div>

  <p>
    Además, la desparasitación regular es fundamental para la salud de tu mascota. Ofrecemos tratamientos efectivos contra parásitos internos (como lombrices) y externos (pulgas, garrapatas).
    Nuestro enfoque preventivo garantiza el bienestar de tu mascota y protege también a tu familia.
  </p>

  <div class="beneficios">
    <h3>¿Por qué elegirnos?</h3>
    <ul>
      <li>Cirugías programadas, urgencias y esterilizaciones.</li>
      <li>Monitoreo en tiempo real durante todo el procedimiento.</li>
      <li>Uso de productos desparasitantes de alta calidad.</li>
      <li>Atención cálida, humana y ética con cada paciente.</li>
      <li>Seguimiento clínico después de cada cirugía o tratamiento.</li>
    </ul>
  </div>
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

