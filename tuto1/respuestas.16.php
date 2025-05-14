<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center";>
    <?php
    $nombre=$_POST["nombre"];
    $contraseña=$_POST["contraseña"];
    switch ($usuario){
        case"0";
            $mensaje="La clave de $nombre; es , $contraseña;";
            break;
        case"1";
            $mensaje="La clave de $nombre; es , $contraseña;";
            break;
        case"2";
            $mensaje="La clave de $nombre; es , $contraseña;";
            break;
        case"3";
            $mensaje="La clave de $nombre; es , $contraseña;";
            break;
        case"4";
            $mensaje="La clave de $nombre; es , $contraseña;";
            break;
        default:
            $mensaje="no selecciono nivel de estudios";
    }

    echo "<h2> resultados </h2><br>";
    echo $nombre." ".$mensaje;