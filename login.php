<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "equilibrio_animal");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['Usuario']);
    $contraseña = $_POST['Contraseña'];

    $stmt = $conexion->prepare("SELECT Id, Usuario, Contraseña FROM usuarios WHERE Usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();

        if (password_verify($contraseña, $fila['Contraseña'])) {
            $_SESSION['usuario'] = $fila['Usuario'];
            $_SESSION['id_usuario'] = $fila['Id'];
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
}

$conexion->close();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Equilibrio Animal</title>
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
  <ul id="navMenu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a href="servicios.php">Servicios</a></li>
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

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <input type="text" name="Usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="Contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar">
        </form>
        <p>¿No tienes una cuenta? <a href="signin.php">Regístrate aquí</a></p>
    </div>

    <footer>
        &copy; 2025 Equilibrio Animal | Todos los derechos reservados
    </footer>

</body>
</html>
