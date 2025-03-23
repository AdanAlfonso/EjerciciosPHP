<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Claves</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="verificar_claves.php" method="post">
        <label>Nombre de Usuario:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Clave:</label>
        <input type="password" name="clave1" required><br><br>

        <label>Repetir Clave:</label>
        <input type="password" name="clave2" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>

