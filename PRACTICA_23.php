<?php
// PRACTICA 23: Eliminar registro (Delete)
$conexion = new mysqli("localhost", "root", "", "mi_base");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM personas WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado.";
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }
}

$conexion->close();
?>
<form method="post">
    ID: <input type="number" name="id"><br>
    <input type="submit" value="Eliminar">
</form>
