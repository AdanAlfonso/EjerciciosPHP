<?php
$servername = "localhost";
$username = "root";
$password = "Reb@lledo2003";
$database = "PHPFACIL";

$nombrecur = $_POST['nombrecur'];

try {
    // Conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta de inserción
    $sql = "INSERT INTO cursos (nombrecur) VALUES (:nombrecur)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombrecur', $nombrecur);

    if ($stmt->execute()) {
        echo "Curso registrado exitosamente.";
    } else {
        echo "Error al registrar el curso.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$conn = null;
?>
