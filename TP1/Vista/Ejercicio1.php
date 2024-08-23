<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 1</title>
</head>
<body>
    <h2>Ingrese un número</h2>
    <form action="action/vernumero.php" method="GET">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>