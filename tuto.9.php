<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <form action="procesar.php" method="post">
        <h2>Nombre</h2>
        <input type="text" name="nombre" required>
        <h2>Edad</h2>
        <input type="number" name ="edad" required>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>