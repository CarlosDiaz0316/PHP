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
    if (isset($_REQUEST["futbol"]))
    {   echo "$nombre,practica Futbol\n","<br>";
    }
    if (isset($_REQUEST["basquet"]))
    {   echo "$nombre,practica basquet\n","<br>";
    }
    if (isset($_REQUEST["volley"]))
    {   echo "$nombre,practica volley \n","<br>";
    }
    if (isset($_REQUEST["tennis"]))
    {   echo "$nombre,practica tennis \n","<br>";
    }
    ?>
</body>
</html>