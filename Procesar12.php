<?php
$nombre = $_POST['nombre'];
$deportes = $_POST['deportes'];
$cantidad = count($deportes);

echo "Hola, $nombre. Practicas $cantidad deportes:<br>";
foreach ($deportes as $deporte) {
    echo "- $deporte<br>";
}
?>
