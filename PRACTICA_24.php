?php
// PRACTICA 24: Eliminar todos los registros (Truncate)
$conexion = new mysqli("localhost", "root", "", "mi_base");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "TRUNCATE TABLE personas";
    if ($conexion->query($sql) === TRUE) {
        echo "Todos los registros han sido eliminados.";
    } else {
        echo "Error al eliminar registros: " . $conexion->error;
    }
}

$conexion->close();
?>
<form method="post">
    <input type="submit" value="Eliminar Todos">
</form>
