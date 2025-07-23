<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Adopciones Responsables - Equilibrio Animal</title>
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
  <h2>Adopciones Responsables</h2>
  <p>
    Adoptar una mascota es un acto de amor y compromiso. En <strong>Equilibrio Animal</strong> creemos en dar segundas oportunidades a perros y gatos que han sido rescatados de situaciones difíciles. Nuestro programa de adopciones responsables garantiza que cada animal vaya a un hogar donde recibirá amor, cuidado y respeto.
  </p>

  <p>
    Evaluamos cuidadosamente tanto a los animales como a los adoptantes para asegurar una convivencia armoniosa. Además, brindamos seguimiento y orientación para garantizar el bienestar de todos los involucrados.
  </p>

  <div class="galeria">
    <img src="img/familia.jpg" alt="Perro adoptado feliz">
    <img src="img/gato.jpg" alt="Gato en brazos de nuevo dueño">
    <img src="img/recien adoptado.png" alt="Niños con mascota adoptada">
  </div>

  <div class="beneficios">
    <h3>¿Por qué adoptar con nosotros?</h3>
    <ul>
      <li>Todos los animales están esterilizados, vacunados y desparasitados.</li>
      <li>Asesoría previa y seguimiento después de la adopción.</li>
      <li>Contribuyes al bienestar animal y reduces el abandono.</li>
      <li>Ayudas a salvar vidas y a formar nuevas familias felices.</li>
    </ul>
  </div>

  <p>
    Si estás listo para cambiar una vida y recibir amor incondicional, <strong>considera adoptar</strong>. No estás comprando una mascota, estás ganando un amigo fiel para toda la vida.
  </p>
</section>

<footer>
  &copy; 2025 Equilibrio Animal - Todos los derechos reservados.
</footer>

</body>
</html>
