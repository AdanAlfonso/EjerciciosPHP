<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 10 - Formulario</title>
</head>
<body>
    <h2>Ingrese su nombre y edad</h2>
    <form action="Procesar10.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
