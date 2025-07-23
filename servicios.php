<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios - Equilibrio Animal</title>
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
        <li><a href="Urg.php">Urgencias Veterinarias 24 Horas</a></li>
        <li><a href="cirugias.php">Cirugías y Desparasitación</a></li>
        <li><a href="Adopta.php">Adopciones Responsables</a></li>
        <li><a href="Lab.php">Laboratorio Clínico Veterinario</a></li>
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

<section class="servicios">
  <h2>Nuestros Servicios</h2>

  <div class="servicio-item">
    <h3>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a7 7 0 00-7 7c0 3.86 3.14 7 7 7s7-3.14 7-7a7 7 0 00-7-7zM4 9a8 8 0 0116 0c0 4.418-3.582 8-8 8s-8-3.582-8-8zm8 2a1 1 0 110-2 1 1 0 010 2z"/></svg>
      Consulta Veterinaria
    </h3>
    <p>Ofrecemos revisiones completas, diagnóstico y tratamientos personalizados para perros y gatos. Nuestro equipo de veterinarios está preparado para brindarte confianza y atención profesional.</p>
    <div class="beneficios">
      <h4>Beneficios:</h4>
      <ul>
        <li>Atención personalizada y cercana.</li>
        <li>Diagnóstico temprano para enfermedades.</li>
        <li>Plan de salud adaptado a cada mascota.</li>
      </ul>
    </div>
    <a href="consulta_v.php">Ver más →</a>
  </div>

  <div class="servicio-item">
    <h3>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.486 2 2 6.486 2 12c0 5.514 4.486 10 10 10s10-4.486 10-10c0-5.514-4.486-10-10-10zm0 18a7.958 7.958 0 01-4.9-1.704l11.196-11.196A7.958 7.958 0 0120 12c0 4.411-3.589 8-8 8zm-6.102-5.196l11.298-11.297A7.95 7.95 0 014 12a7.957 7.957 0 011.898 2.804z"/></svg>
      Urgencias Veterinarias 24 Horas
    </h3>
    <p>¿Una emergencia a cualquier hora del día? Nuestro servicio de urgencias está disponible las 24 horas para atender situaciones críticas de salud en tus mascotas con rapidez y eficacia.</p>
    <div class="beneficios">
      <h4>Beneficios:</h4>
      <ul>
        <li>Atención inmediata y profesional.</li>
        <li>Equipo preparado para urgencias graves.</li>
        <li>Servicio disponible todos los días del año.</li>
      </ul>
    </div>
    <a href="Urg.php">Ver más →</a>
  </div>

  <div class="servicio-item">
    <h3>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 9v7a4 4 0 01-4 4H9a4 4 0 01-4-4v-7H4l8-8 8 8h-3z"/></svg>
      Cirugías y Desparasitación
    </h3>
    <p>Realizamos esterilizaciones, cirugías de tejidos blandos y más, con protocolos seguros. Además, aplicamos tratamientos antiparasitarios internos y externos para prevenir enfermedades.</p>
    <div class="beneficios">
      <h4>Beneficios:</h4>
      <ul>
        <li>Procedimientos seguros y modernos.</li>
        <li>Prevención efectiva contra parásitos.</li>
        <li>Recuperación guiada y controlada.</li>
      </ul>
    </div>
    <a href="cirugias.php">Ver más →</a>
  </div>

  <div class="servicio-item">
    <h3>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09A6.52 6.52 0 0116.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
      Adopciones Responsables
    </h3>
    <p>Fomentamos la adopción responsable para dar un hogar lleno de amor a perros y gatos necesitados. Acompañamos en el proceso para garantizar bienestar a los animales y a sus nuevos dueños.</p>
    <div class="beneficios">
      <h4>Beneficios:</h4>
      <ul>
        <li>Apoyo en la integración y cuidados iniciales.</li>
        <li>Promoción de tenencia responsable.</li>
        <li>Mejora de la calidad de vida de los animales.</li>
      </ul>
    </div>
    <a href="adopta.php">Ver más →</a>
  </div>

  <div class="servicio-item">
    <h3>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 17.25V21h3.75l11-11.03-3.75-3.75L3 17.25zM20.71 7.04a1.003 1.003 0 000-1.41l-2.34-2.34a1.003 1.003 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
      Laboratorio Clínico Veterinario
    </h3>
    <p>Contamos con un laboratorio equipado para realizar análisis clínicos precisos que facilitan diagnósticos rápidos y certeros, mejorando la atención y el tratamiento de tus mascotas.</p>
    <div class="beneficios">
      <h4>Beneficios:</h4>
      <ul>
        <li>Resultados rápidos y confiables.</li>
        <li>Detección temprana de enfermedades.</li>
        <li>Mejor seguimiento y control del tratamiento.</li>
      </ul>
    </div>
    <a href="lab.php">Ver más →</a>
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

