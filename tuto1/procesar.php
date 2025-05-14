<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
<?php
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];

    echo "<h2> resultados </h2>";
    echo "hola"." ".$nombre,"<br>";

    if($edad >= 18){
        echo "usted tiene"." ".$edad.""."usted es mayor de edad <br>";
    }
    else{
        echo "usted tiene"." ".$edad." "."usted es menor de edad";
    }
?> 
</body>
</html>