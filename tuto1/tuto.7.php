<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor=rand(1,3);
    echo"el valor del dato es: ".$valor;
    
    if ($valor==1){
        echo"el resultado es uno";
    }
    elseif($valor==2){
        echo"el resultado es  dos";
    }
    else{
        echo"el resultado es tres";
    }
    ?>

</body>
</html>