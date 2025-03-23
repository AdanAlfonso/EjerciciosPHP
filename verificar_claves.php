<?php
function verificar_claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "Las claves ingresadas no coinciden.";
    }
    return "Registro exitoso. Las claves coinciden.";
}

$usuario = $_POST['usuario'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

echo "<h2>Resultado de Registro</h2>";
echo "Usuario: $usuario<br>";
echo verificar_claves($clave1, $clave2);
?>
