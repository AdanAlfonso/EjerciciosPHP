<?php
// PRACTICA 21: Listar registros (Select)
$conexion = new mysqli("localhost", "root", "", "mi_base");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM personas";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr><td>{$fila['id']}</td><td>{$fila['nombre']}</td><td>{$fila['edad']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros.";
}

$conexion->close();
?>
