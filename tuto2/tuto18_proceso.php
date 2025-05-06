<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_REQUEST["nombre"];
    $contraseña = $_REQUEST["contraseña"];
    $contraseña2 = $_REQUEST["contraseña2"];
    echo "iioi";
    
    

    function contraseñai($contraseña, $contraseña2) {
        if ($contraseña !== $contraseña2) {
            echo "<p>Error: Las claves no coinciden.</p>";
        } else {
            echo "<p>Registro exitoso. Bienvenido, usuario.</p>";
        }
    }
    contraseñai($contraseña,$contraseña2);

}
    
    ?>
</body>
</html>