<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>usuarios</h3>
        <br>
        <br>
        <input type="radio" name="usuario" value="camilo" > Camilo<br>
        <input type="radio" name="usuario" value="samuel"> Samuel<br>
        <input type="radio" name="usuario" value="adamary"> adamary<br>
        <input type="radio" name="usuario" value="marlon"> Marlon<br>
        <input type="radio" name="usuario" value="carlos"> Carlos<br>

        <button>Enviar</button>
    </form>
    <?php
    if (isset($_REQUEST['usuario'])){
        $usuario=$_REQUEST["usuario"];
        $registros=array(
        "samuel"=>"123",
        "camilo"=>"2123",
        "adamary"=>"3212",
        "marlon"=>"3124",
        "carlos"=>"1265");

        echo "El usuario $usuario tiene la contraseña: ". $registros[$usuario];
        }
    ?>
    
</body>
</html>