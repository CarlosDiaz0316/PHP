<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <?php
$conexion=mysqli_connect("localhost","root","","base1") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into cursos(nombrecurso,codigo)
values
('$_REQUEST[nombre]',$_REQUEST[codigo])")
or die("Problemas en el select"($conexion));
mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
</html>