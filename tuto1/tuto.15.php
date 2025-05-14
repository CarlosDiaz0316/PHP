<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Pedidos</title>
</head>
<body>

    <h2>Lista de Pedidos de Pizzas</h2>

    <?php

    $archivo = 'pedidos.txt';

    if (file_exists($archivo)) {

        $contenido = file_get_contents($archivo);


        echo nl2br($contenido);
    } else {
        echo "<p>No se encontraron pedidos.</p>";
    }
    ?>

</body>
</html>