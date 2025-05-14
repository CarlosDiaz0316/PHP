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
    $estudios=$_POST["estudios"];
    switch ($estudios){
        case"0";
            $mensaje="no tiene estudios";
            break;
        case"1";
            $mensaje="tiene estudios primarios";
            break;
        case"2";
            $mensaje="tiene estudios secundarios";
            break;
        default:
            $mensaje="no selecciono nivel de estudios";
    }

    echo "<h2> resultados </h2><br>";
    echo $nombre." ".$mensaje



    ?>
    
</body>
</html>