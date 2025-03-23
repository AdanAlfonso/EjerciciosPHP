<?php
// Configuración de conexión
$host = "localhost";
$user = "root";
$pass = "Reb@lledo2003"; // Pon tu contraseña si la tienes
$db = "ejercicios_php";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "¡Conexión exitosa a la base de datos!";

// Cerrar conexión
$conn->close();
?>
