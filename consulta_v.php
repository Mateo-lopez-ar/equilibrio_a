<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Equilibrio Animal</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
  <div class="logo-container">
    <a href="index.php">
      <img src="img/logo.png" alt="Logo Equilibrio Animal">
    </a>
  </div>
  <h1>Equilibrio Animal</h1>
  <div class="logo-container" style="visibility: hidden;">
    <img src="img/logo.png" alt="" style="height: 80px; width: 80px;">
  </div>
</header>

<nav>
  <button class="menu-toggle" onclick="toggleMenu()">☰ Menú</button>
  <ul id="navMenu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li class="dropdown">
      <a href="servicios.php" onclick="toggleSubmenu(event)">Servicios ▾</a>
      <ul class="submenu">
        <li><a href="#">Consulta Veterinaria</a></li>
        <li><a href="Urgencias_Veterinaria_24_horas.php">Urgencias Veterinarias 24 Horas</a></li>
        <li><a href="Cirugias_y_Desparasitacion.php">Cirugías y Desparasitación</a></li>
        <li><a href="Adopciones_Responsables.php">Adopciones Responsables</a></li>
        <li><a href="Laboratorio_Clinico_Veterinario.php">Laboratorio Clínico Veterinario</a></li>
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

<section class="inicio">
  <h2>Consultas Veterinarias</h2>
  <p>Encuentra acá todas las opciones para darle a tu mascota la mejor atención, incluyendo especialistas, pruebas de laboratorio, entre otros.</p>
</section>

<section class="servicios-tabla">
  <div class="servicio-cuadro">
    <img src="img/esteto.png" alt="Médico General">
    <div>
      <h3>Medicina General</h3>
      <p>Consulta básica para revisión de signos vitales, diagnóstico general y control preventivo.</p>
    </div>
  </div>

  <div class="servicio-cuadro">
    <img src="img/corss.png" alt="Especialista Veterinario">
    <div>
      <h3>Especialistas</h3>
      <p>Atención en dermatología, oftalmología, cardiología, ortopedia y más, con profesionales capacitados.</p>
    </div>
  </div>

  <div class="servicio-cuadro">
    <img src="img/rayos.png" alt="Rayos X">
    <div>
      <h3>Rayos X</h3>
      <p>Radiografías de alta resolución para un diagnóstico interno preciso y sin dolor para tu mascota.</p>
    </div>
  </div>

  <div class="servicio-cuadro" >
    <img src="img/lab.png" alt="Laboratorio Clínico">
    <div>
      <h3>Laboratorio Clínico</h3>
      <p>Exámenes de sangre, orina, coprológicos y más para un análisis integral de la salud animal.</p>
    </div>
  </div>
</section>

<div class="boton-citas">
  <a href="citas.php">Agendar una cita</a>
</div>

<footer>
  &copy; 2025 Equilibrio Animal | Todos los derechos reservados
</footer>

<script>
  function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("show");
  }

  function toggleSubmenu(e) {
    e.preventDefault();
    var submenu = e.target.nextElementSibling;
    submenu.classList.toggle("show");
  }
</script>

</body>
</html>

