<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
    mysqli_query($conexion,"delete from cursos") or
    die("Problemas en el select:".mysqli_error($conexion));
    echo "Se efectuó el borrado de todos los archivos.";
    mysqli_close($conexion);
?>
</body>
</html>