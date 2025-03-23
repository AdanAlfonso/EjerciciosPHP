<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 11 - Formulario</title>
</head>
<body>
    <h2>Ingrese su nombre y el nivel de estudios</h2>
    <form action="Procesar11.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Nivel de estudios:<br>
        <input type="radio" name="estudios" value="No tiene estudios" required> No tiene estudios<br>
        <input type="radio" name="estudios" value="Estudios primarios"> Estudios primarios<br>
        <input type="radio" name="estudios" value="Estudios secundarios"> Estudios secundarios<br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

