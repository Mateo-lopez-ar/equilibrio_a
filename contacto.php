<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "equilibrio_animal";

$conn = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST["Nombre"]);
    $correo = $conn->real_escape_string($_POST["Correo"]);
    $mensaje = $conn->real_escape_string($_POST["Mensaje"]);

    $sql = "INSERT INTO mensajes_contacto (Nombre, Correo, Mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Mensaje enviado correctamente'); window.location.href='contacto.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Contáctanos - Equilibrio Animal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />




<style>
  
    body {
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;//Dejar este styles por error en el diseño//; 
      margin: 0;
      padding: 0;
      background-color: #ccebea;
    }

    .contact-section {
      background-color: #e6f7f6;
      padding: 60px 20px;
      text-align: center;
    }

    .contact-container {
      max-width: 900px;
      margin: 0 auto;
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-section h2 {
      color: #2bb2a2;
      font-size: 2.5em;
      margin-bottom: 15px;
    }

    .contact-section p {
      font-size: 1.2em;
      margin-bottom: 30px;
      color: #333;
    }

    .contact-details {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-bottom: 30px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 1.1em;
      color: #333;
    }

    .contact-item i {
      color: #2bb2a2;
      font-size: 1.3em;
    }

    .social-icons {
      margin-top: 20px;
    }

    .social-icons a {
      margin: 0 10px;
      font-size: 1.8em;
      color: #2bb2a2;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #1e8176;
    }

    form {
      margin-top: 40px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input,
    textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1em;
      width: 100%;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button {
      background-color: #2bb2a2;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #23988b;
    }

    .btn-volver {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background-color: #2bb2a2;
      color: white;
      padding: 10px 20px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s;
    }

    .btn-volver:hover {
      background-color: #1e8176;
    }

    @media (max-width: 600px) {
      .contact-item {
        flex-direction: column;
        text-align: center;
      }

      .btn-volver {
        font-size: 0.9em;
        padding: 8px 16px;
      }
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <div class="contact-container">
      <h2>Contáctanos</h2>
      <p>Estamos aquí para cuidar de tus mascotas. Puedes encontrarnos por los siguientes medios:</p>

      <div class="contact-details">
        <div class="contact-item">
          <i class="fas fa-phone-alt"></i>
          <span>+57 3503399402</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <span>montoyathomas2008@gmail.com</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>Calle 6c sur #83a-45, Medellín, Colombia</span>
        </div>
      </div>

      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="https://w.app/ig5lqk"><i class="fab fa-whatsapp"></i></a>
      </div>

      <form action="contacto.php" method="post">
        <input type="text" name="Nombre" placeholder="Tu nombre" required />
        <input type="email" name="Correo" placeholder="Tu correo electrónico" required />
        <textarea name="Mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
        <button type="submit">Enviar mensaje</button>
      </form>
    </div>
  </section>

  <a href="index.php" class="btn-volver"><i class="fas fa-arrow-left"></i> Volver</a>
</body>
</html>

