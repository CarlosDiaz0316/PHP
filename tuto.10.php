<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <form action="respuesta.10.php" method="post">
        ingrese su nombre 
        <br>
        <input type="text" name="nombre">
        <br>
        nivel de estudios
        <br>
        <input type="radio" name="estudios" value="0" required> No tiene estudios<br>
        <input type="radio" name="estudios" value="1"> Estudios primarios<br>
        <input type="radio" name="estudios" value="2"> Estudios secundarios<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>