<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "equilibrio_animal";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
