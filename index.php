<?php
session_start();
?>

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
  <ul id="navMenu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li class="dropdown">
      <a href="servicios.php">Servicios ▾</a>
      <ul class="submenu">
        <li><a href="Consulta_Veterinaria.php">Consulta Veterinaria</a></li>
        <li><a href="Urg.php">Urgencias Veterinarias 24 Horas</a></li>
        <li><a href="Cirugias_y_Desparasitacion.php">Cirugías y Desparasitación</a></li>
        <li><a href="Adopciones_Responsables.php">Adopciones Responsables</a></li>
        <li><a href="lab.php">Laboratorio Clínico Veterinario</a></li>
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
        <h2>Bienvenido a Equilibrio Animal</h2>
        <p>Tu centro de confianza para el cuidado de tus mascotas. Con pasión, experiencia y dedicación, ofrecemos atención médica, adopciones y mucho más.</p>
        <img src="img/husky.webp" alt="Imagen de portada" loading="lazy">
    </section>

    <footer>
        &copy; 2025 Equilibrio Animal | Todos los derechos reservados
    </footer>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script>
  const { createClient } = supabase;
  const supabaseClient = createClient('https://mqvbbcickgnsxzpdaarv.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im1xdmJiY2lja2duc3h6cGRhYXJ2Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTMzMDM4ODIsImV4cCI6MjA2ODg3OTg4Mn0.6FlcPgW4vNNmIl8YCvx58P_NPK61-ONNek2AeM0GRe8');

  async function getUsers() {
    let { data, error } = await supabaseClient.from('usuarios').select('*');
    if (error) {
      console.error('Error al obtener usuarios:', error);
    } else {
      console.log('Usuarios:', data);
    }
  }

  getUsers();
</script>

