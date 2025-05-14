<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registro de usuario</h1>

<form>
   <label>Nombre:</label><br>
   <input type="text" name="nombre" required><br><br>

   <label>Correo Electrónico:</label><br>
   <input type="email" name="correo" required><br><br>

   <label>Contraseña:</label><br>
   <input type="password" name="contrasena" required><br><br>

   <label>Confirmar Contraseña:</label><br>
   <input type="password" name="confirmar_contrasena" required><br><br>

   <button type="submit">Registrarse</button>
</form>

<p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a></p>


<?php
if (isset($_REQUEST['nombre']) && isset($_REQUEST['correo']) && isset($_REQUEST['contrasena'])) {
   $conexion = mysqli_connect("localhost", "root", "", "retophp") 
       or die("Problemas con la conexión a la base de datos.");

   $nombre = mysqli_real_escape_string($conexion, $_REQUEST['nombre']);
   $correo = mysqli_real_escape_string($conexion, $_REQUEST['correo']);
   $contrasena = password_hash($_REQUEST['contrasena'], PASSWORD_DEFAULT); 

   $consulta = "INSERT INTO usuarios (nombre, correo, contrasena)
               VALUES ('$nombre', '$correo', '$contrasena')";

   if (mysqli_query($conexion, $consulta)) {
       echo "<script>alert('Registro exitoso'); window.location.href='index.php';</script>";
   } else {
       echo "Error: " . mysqli_error($conexion);
   }

   mysqli_close($conexion);
}
?>
</body>
</html>