<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nosotros - Equilibrio Animal</title>
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
            <img src="logo.png" alt="">
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
            <li><a href="Consulta_Veterinaria.php">Consulta Veterinaria</a></li>
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

    <section class="nosotros">
        <h2>Nosotros</h2>
        <p>
            En <b>Equilibrio Animal</b> trabajamos con dedicación y cariño para cuidar a tus mascotas como si fueran nuestras.
            Nuestro equipo está conformado por médicos veterinarios, técnicos y asistentes con experiencia y vocación.
        </p>
        <p>
            Nos enfocamos en brindar servicios de alta calidad, siempre con calidez humana. Ya sea para consultas generales, urgencias o adopciones, puedes contar con nosotros.
        </p>
        <p>
            Estamos convencidos de que cada mascota merece una vida feliz, saludable y llena de amor. ¡Gracias por dejarnos ser parte de su historia!
        </p>

        <img src="equipo-veterinario.jpg" alt="Equipo Veterinario Equilibrio Animal">

        <div class="vision-mision">
            <div>
                <h3>Misión</h3>
                <p>
                    Nuestra misión es ofrecer servicios veterinarios de calidad, brindando un cuidado integral a nuestras mascotas y fomentando el bienestar animal. Nos esforzamos por crear un ambiente de confianza y seguridad para los animales y sus dueños.
                </p>
            </div>
            <div>
                <h3>Visión</h3>
                <p>
                    Ser reconocidos como una de las clínicas veterinarias más confiables y avanzadas, siendo un referente en atención animal, innovación y compromiso social. Nuestro objetivo es continuar creciendo para ofrecer cada vez más y mejores servicios para el bienestar de nuestros amigos peludos.
                </p>
            </div>
        </div>

        <div class="caracteristicas">
            <div>
                <h3>Qué nos caracteriza</h3>
                <p>
                    Nos caracteriza nuestra pasión por el bienestar animal, nuestro equipo altamente capacitado y nuestro enfoque personalizado en cada paciente. Tratamos a cada mascota con el cuidado y amor que se merece, brindando atención médica de alta calidad y un servicio integral.
                </p>
            </div>
            <div>
                <h3>Por qué elegirnos</h3>
                <p>
                    Elegirnos significa optar por una clínica que pone la salud y el bienestar de tus mascotas en primer lugar. Ofrecemos atención veterinaria integral, urgencias las 24 horas y un ambiente confiable y seguro para tu animal. Además, contamos con tecnología avanzada y un equipo de profesionales apasionados por su trabajo.
                </p>
            </div>
        </div>
    </section>
    
        <footer>
        &copy; 2025 Equilibrio Animal | Todos los derechos reservados
          </footer>
</body>
</html>
