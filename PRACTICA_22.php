<?php
// PRACTICA 22: Consultar registro específico
$conexion = new mysqli("localhost", "root", "", "mi_base");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "SELECT * FROM personas WHERE id = $id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        echo "ID: " . $fila['id'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Edad: " . $fila['edad'] . "<br>";
    } else {
        echo "No se encontró el registro.";
    }
}

$conexion->close();
?>
<form method="post">
    ID: <input type="number" name="id"><br>
    <input type="submit" value="Consultar">
</form>
