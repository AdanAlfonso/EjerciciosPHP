<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h2>Pedido de Pizzas</h2>
    <form action="guardar_pedido.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" required><br><br>

        <label>
            <input type="checkbox" name="pizza[]" value="Jamon y Queso">
            Jamón y Queso
        </label>
        <label>Cantidad:</label>
        <input type="text" name="cantidad_jyq"><br><br>

        <label>
            <input type="checkbox" name="pizza[]" value="Napolitana">
            Napolitana
        </label>
        <label>Cantidad:</label>
        <input type="text" name="cantidad_napo"><br><br>

        <label>
            <input type="checkbox" name="pizza[]" value="Mozzarella">
            Mozzarella
        </label>
        <label>Cantidad:</label>
        <input type="text" name="cantidad_mozz"><br><br>

        <button type="submit">Confirmar</button>
    </form>
</body>
</html>

