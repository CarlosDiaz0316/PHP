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
       $registros=mysqli_query($conexion,"select codigo,nombrecurso from cursos where nombrecurso ='$_REQUEST[nombre]'") or 
       die("Problemas en el select:".($conexion));
       if ($reg=mysqli_fetch_array($registros))
       {
       echo "Nombre:".$reg['nombrecurso']."<br>";
       echo "Codigo:".$reg['codigo']."<br>";
       }
       else
       {
       echo "No existe un alumno con ese mail.";
       }
    ?>
</body>
</html>