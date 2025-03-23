<!DOCTYPE html>
<html lang="es">

<head>
<title>PRACTICA 12 - Formulario(CheckBox)</title>
</head>

<body>
    <h2>Ingrese su nombre y los deportes que practica</h2>
    <form action="Procesar12.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Deportes:<br>
        <input type="checkbox" name="deportes[]" value="Fútbol"> Fútbol<br>
        <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="deportes[]" value="Tenis"> Tenis<br>
        <input type="checkbox" name="deportes[]" value="Vóley"> Vóley<br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html
