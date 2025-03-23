<!DOCTYPE html>
<html lang="es">

<head>
<title>PRACTICA 13 - Formulario(Control Select)</title>
</head>

<body>
    <h2>Ingrese su nombre y el ingreso anual</h2>
    <form action="Procesar13.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Ingreso Anual:
        <select name="ingreso" required>
            <option value="1000">1 - 1000</option>
            <option value="3000">1001 - 3000</option>
            <option value="4000">Más de 3000</option>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

