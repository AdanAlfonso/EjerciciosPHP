<?php
$archivo = "datos.txt";

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    echo "<h2>Pedidos de Pizzas</h2>";
    echo "<pre>$contenido</pre>";
} else {
    echo "No se encontraron pedidos.";
}
?>

