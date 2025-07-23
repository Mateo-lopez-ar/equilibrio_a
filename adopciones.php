<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Adopciones - Equilibrio Animal</title>
<link rel="stylesheet" href="styles.css"> 
</head>
<body>

  <header>
    <div class="logo-container">
      <a href="index.php"><img src="img/logo.png" alt="Logo Equilibrio Animal"></a>
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
    <h2>Adopciones</h2>
    <p>¡Dales una segunda oportunidad a nuestros amigos peludos! Aquí encontrarás animales rescatados listos para recibir amor y un nuevo hogar.</p>

    <div class="galeria">
      <div class="animal">
        <img src="img/firulais.jpeg" alt="Firulais">
        <h3>Firulais</h3>
        <p>Macho, 3 años. Juguetón, leal y muy cariñoso.</p>
      </div>
      <div class="animal">
        <img src="img/miau.jpg" alt="Mimi">
        <h3>Mimi</h3>
        <p>Hembra, 2 años. Tranquila, independiente y mimosa.</p>
      </div>
      <div class="animal">
        <img src="img/firulais2.webp" alt="Toby">
        <h3>Toby</h3>
        <p>Macho, 1 año. Activo, ideal para familias con niños.</p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 Equilibrio Animal | Todos los derechos reservados
  </footer>

</body>
</html>
