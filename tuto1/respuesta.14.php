<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <H1>Solicitud De Pedido</H1>
    <?php
    $nombre=$_POST["nombre"];
    $direccion=$_POST["direccion"];
    $cantidadJyQ=$_POST["cantidadJyQ"];
    $cantidadN=$_POST["cantidadN"];
    $cantidadM=$_POST["cantidadM"];
    
    if (isset($_REQUEST["nombre"]))
    {   echo "Nombre : ,$nombre\n","<br>";
    }
    if (isset($_REQUEST["direccion"]))
    {   echo "direccion : ,$direccion \n","<br>";
    }
    if (isset($_REQUEST["cantidadJyQ"]))
    {   echo "Cantidad\n","<br>";
        echo "Jamon y Queso: ,$cantidadJyQ\n","<br>";
    }
    if (isset($_REQUEST["cantidadN"]))
    {   echo "Cantidad\n","<br>";
        echo "Napolitana: ,$cantidadN\n","<br>";
    }
    if (isset($_REQUEST["cantidadM"]))
    {   echo "Cantidad\n","<br>";
        echo "Mozarella: ,$cantidadM\n","<br>";
    }

    $pedido = "Nombre: $nombre\nDirección: $direccion\n";
        if ($cantidadJyQ > 0) {
            $pedido .= "Cantidad Jamón y Queso: $cantidadJyQ\n";
        }
        if ($cantidadN > 0) {
            $pedido .= "Cantidad Napolitana: $cantidadN\n";
        }
        if ($cantidadM > 0) {
            $pedido .= "Cantidad Mozarella: $cantidadM\n";
        }

       
        $separador = str_repeat(".", 40) . "\n";

        $archivo = 'pedidos.txt';
        file_put_contents($archivo, $pedido . $separador, FILE_APPEND);

        echo "<p>Realizando pedido</p>";
    ?>

    
</body>
</html>