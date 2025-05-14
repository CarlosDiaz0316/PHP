<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">
    <?php
    echo "<br>Tabla del 2 usando while:<br>";
    $i = 1;
    while ($i <= 10) {
        echo "2 x $i = " . (2 * $i) . "<br>";
        $i++;
 }

echo "<br>Tabla del 2 usando do/while:<br>";
$i = 1;
do {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
} while ($i <= 10);
echo "<br>Tabla del 2 con for:<br>";

for ($i = 0; $i <= 20; $i += 2) {
    echo "$i<br>";
}
 ?>
</body>
</html>