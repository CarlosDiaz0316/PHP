<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    
<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header("Location: tareas.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Inicio de sesión</h1>

    <form method="POST" action="">
        <label>Correo Electrónico:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit" name="login">Iniciar Sesión</button>
    </form>

    <p>¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $conexion = new mysqli("localhost", "root", "", "retophp");

    if ($conexion->connect_error) {
        die("❌ Error de conexión: " . $conexion->connect_error);
    }

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $clave = $_POST['contrasena'];

    $stmt = $conexion->prepare("SELECT id, nombre, contrasena FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($usuario = $resultado->fetch_assoc()) {
        if (password_verify($clave, $usuario['contrasena'])) {

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];

            
            header("Location: tareas.php");
            exit;
        } else {
            echo "<p>❌ Contraseña incorrecta.</p>";
        }
    } else {
        echo "<p>❌ El correo no está registrado.</p>";
    }

    $stmt->close();
    $conexion->close();
}
?>
</body>
</html>
