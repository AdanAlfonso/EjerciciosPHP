<?php
$nombre = $_POST['nombre'];
$ingreso = $_POST['ingreso'];

if ($ingreso > 3000) {
    echo "Hola, $nombre. Debes pagar impuestos, ya que tus ingresos superan los 3000.";
} else {
    echo "Hola, $nombre. No debes pagar impuestos.";
}
?>
