<?php
$usuarios = array(
    "admin" => "1234",
    "juan" => "abcd",
    "maria" => "5678",
    "pedro" => "efgh",
    "laura" => "91011"
);

echo "<h2>Claves de Usuarios</h2>";
foreach ($usuarios as $nombre => $clave) {
    echo "Usuario: $nombre - Clave: $clave<br>";
}
?>

