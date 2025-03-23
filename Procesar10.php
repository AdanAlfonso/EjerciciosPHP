<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if ($edad >= 18) {
    echo "Hola, $nombre. Eres mayor de edad.";
} else {
    echo "Hola, $nombre. Eres menor de edad.";
}
?>
