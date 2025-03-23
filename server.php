<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST["nombre"];
	$edad = $_POST["edad"];

	if ($edad >= 18){
		$resultado = "Usted es mayor de edad";
	} else {
		$resultado = "Usted es menor de Edad";
	}

	header('Content-Type: application/json');
	echo json_encode(array("mensaje" => $resultado));
}
?>
