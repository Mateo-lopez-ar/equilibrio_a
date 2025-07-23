<?php

 $conexion = new mysqli("localhost", "root", "", "equilibrio_animal");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['Usuario']);
    $email = trim($_POST['Email']);
    $contraseña = $_POST['Contraseña'];

    $verificar = $conexion->prepare("SELECT * FROM usuarios WHERE Usuario = ? OR Email = ?");
    $verificar->bind_param("ss", $usuario, $email);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>alert('El usuario o correo ya están registrados.'); window.location.href = 'registro.html';</script>";
        exit();
    }

    $contraseña_segura = password_hash($contraseña, PASSWORD_DEFAULT);

    $stmt = $conexion->prepare("INSERT INTO usuarios (Usuario, Email, Contraseña) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $email, $contraseña_segura);

    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href = 'login.html';</script>";
    } else {
        echo "<script>alert('Error al registrar usuario.'); window.location.href = 'signin.html';</script>";
    }

    $stmt->close();
    $verificar->close();
}

$conexion->close();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Equilibrio Animal</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #ccebea;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #2bb2a2;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
    }

    header .logo-container {
        flex: 1;
    }

    header img {
        height: 80px;
        width: 80px;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 8px rgba(0,0,0,0.2);
    }

    header h1 {
        flex: 2;
        text-align: center;
        margin: 0;
        font-size: 2.2em;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .menu-toggle {
        display: none;
        background-color: #23988b;
        color: white;
        border: none;
        font-size: 1.5em;
        padding: 10px 20px;
        width: 100%;
        text-align: left;
        cursor: pointer;
    }

    nav {
        background-color: #23988b;
        position: relative;
        box-shadow: inset 0 -4px 8px #1c6a65;
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
        transition: background-color 0.3s;
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
        min-width: 220px;
        z-index: 1000;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .submenu li a {
        padding: 12px 18px;
        color: white;
        font-weight: normal;
    }

    .submenu li a:hover {
        background-color: #15645b;
    }

    @media (max-width: 768px) {
        .menu-toggle {
            display: block;
        }

        nav ul {
            display: none;
            flex-direction: column;
            width: 100%;
        }

        nav ul.show {
            display: flex;
        }

        nav li {
            width: 100%;
        }

        .submenu {
            position: static;
            border-radius: 0;
            box-shadow: none;
        }

        .submenu.show {
            display: block !important;
        }
    }

    .form-container {
        max-width: 450px;
        margin: 80px auto;
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }

    .form-container h2 {
        text-align: center;
        color: #2bb2a2;
        margin-bottom: 20px;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1em;
    }

    .form-container input[type="submit"] {
        width: 100%;
        background-color: #2bb2a2;
        color: white;
        border: none;
        padding: 12px;
        font-size: 1em;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
        background-color: #23988b;
    }

    .form-container p {
        text-align: center;
        margin-top: 15px;
    }

    .form-container a {
        color: #2bb2a2;
        text-decoration: none;
    }

    footer {
        background-color: #2bb2a2;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 60px;
        font-size: 0.9em;
        letter-spacing: 0.03em;
        text-shadow: 0 0 5px rgba(0,0,0,0.15);
    }
</style>

<body>

    <header>
        <div class="logo-container">
            <a href="index.php">
                <img src="img/logo.png" alt="Logo Equilibrio Animal">
            </a>
        </div>
        <h1>Equilibrio Animal</h1>
        <div class="logo-container" style="visibility: hidden;">
            <img src="img/logo.png" alt="">
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

    <div class="form-container">
        <h2>Crear Cuenta</h2>
        <form action="signin.php" method="post">
            <input type="text" name="Usuario" placeholder="Nombre de usuario" required>
            <input type="email" name="Email" placeholder="Correo electrónico" required>
            <input type="password" name="Contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Registrarse">
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.html">Inicia sesión aquí</a></p>
    </div>

    <footer>
        &copy; 2025 Equilibrio Animal | Todos los derechos reservados
    </footer>

</body>
</html>

