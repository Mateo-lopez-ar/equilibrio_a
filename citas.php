<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $conexion = new mysqli("localhost", "root", "", "equilibrio_animal");

    if ($conexion->connect_error) {
        die("Error De Conexión: " . $conexion->connect_error);
    }

    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $telefono = $_POST['Telefono'];
    $nombre_mascota = $_POST['Nombre_Mascota'];
    $raza = $_POST['Raza'];
    $especie = $_POST['Especie_Animal'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $mensaje = $_POST['Mensaje'];

    $sql = "INSERT INTO Citas (Nombre, Email, Telefono, Nombre_Mascota, Raza, Especie_Animal, Fecha, Hora, Mensaje)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssssss", $nombre, $email, $telefono, $nombre_mascota, $raza, $especie, $fecha, $hora, $mensaje);

    if ($stmt->execute()) {
        echo "<script>alert('Cita Registrada Con Éxito'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error Al Registrar La Cita: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Solicitar Cita - Equilibrio Animal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #ccebea;
    }

    nav {
      background-color: #2bb2a2;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .form-section {
      background-color: #e6f7f6;
      padding: 50px 20px;
      max-width: 800px;
      margin: 20px auto;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h2 {
      color: #2bb2a2;
      text-align: center;
      font-size: 2em;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 12px;
      font-size: 1em;
      border: 1px solid #ccc;
      border-radius: 8px;
      text-transform: capitalize;
    }

    input[type="email"] {
      text-transform: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
      text-transform: none;
    }

    button {
      background-color: #2bb2a2;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 1em;
      cursor: pointer;
    }

    button:hover {
      background-color: #23988b;
    }

    .btn-volver {
      display: block;
      margin: 20px auto 0;
      text-align: center;
      color: #2bb2a2;
      font-weight: bold;
      text-decoration: none;
    }
  </style>
</head>
<body>

<section class="form-section">
  <h2>Solicitar Cita</h2>
  <form action="citas.php" method="POST">
    <input type="text" name="Nombre" placeholder="Nombre Completo Del Responsable" required>
    <input type="email" name="Email" placeholder="Correo Electrónico De Contacto" required>
    <input type="tel" name="Telefono" placeholder="Teléfono De Contacto">

    <input type="text" name="Nombre_Mascota" placeholder="Nombre De La Mascota" required>
    <input type="text" name="Raza" placeholder="Raza De La Mascota" required>
    <input type="text" name="Especie_Animal" placeholder="Especie Animal (Ej. Canino, Felino)" required>

    <input type="date" name="Fecha" required>
    <input type="time" name="Hora" required>
    <textarea name="Mensaje" placeholder="Motivo De La Cita O Comentarios Adicionales (Opcional)"></textarea>
    <button type="submit">Enviar Solicitud</button>
  </form>
  <a href="index.php" class="btn-volver"><i class="fas fa-arrow-left"></i> Volver Al Inicio</a>
</section>

</body>
</html>
