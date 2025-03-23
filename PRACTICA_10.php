<html>

<head>
<title>PRACTICA 10</title>
</head>

<body>
<?php
echo "Tabla de multiplicar del 2 usando for:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "<br>";
}

echo "<br>Tabla de multiplicar del 2 usando while:<br>";
$i = 1;
while ($i <= 10) {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
}

echo "<br>Tabla de multiplicar del 2 usando do/while:<br>";
$i = 1;
do {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
} while ($i <= 10);
?>


</body>

</html>
