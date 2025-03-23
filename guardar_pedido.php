<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$pizzas = isset($_POST['pizza']) ? $_POST['pizza'] : [];
$cantidad_jyq = $_POST['cantidad_jyq'];
$cantidad_napo = $_POST['cantidad_napo'];
$cantidad_mozz = $_POST['cantidad_mozz'];

$archivo = fopen("datos.txt", "a");

fwrite($archivo, "Nombre: $nombre\n");
fwrite($archivo, "Dirección: $direccion\n");

if (in_array("Jamon y Queso", $pizzas)) {
    fwrite($archivo, "Jamón y Queso - Cantidad: $cantidad_jyq\n");
}

if (in_array("Napolitana", $pizzas)) {
    fwrite($archivo, "Napolitana - Cantidad: $cantidad_napo\n");
}

if (in_array("Mozzarella", $pizzas)) {
    fwrite($archivo, "Mozzarella - Cantidad: $cantidad_mozz\n");
}

fwrite($archivo, str_repeat("-", 50) . "\n");
fclose($archivo);

echo "Pedido registrado con éxito.";
?>
