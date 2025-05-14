<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

$usuario_id = $_SESSION['usuario_id'];


$conn = new mysqli("localhost", "root", "", "retophp");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT id, titulo, descripcion, fecha_creacion, completada FROM tareas WHERE usuario_id = ?");
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Tareas</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?></h2>
    <h3>Mis Tareas</h3>
    <a href="nueva_tarea.php">➕ Añadir Nueva Tarea</a> |
    <a href="logout.php">Cerrar sesión</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha de Creación</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        <?php while ($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo htmlspecialchars($fila['titulo']); ?></td>
            <td><?php echo htmlspecialchars($fila['descripcion']); ?></td>
            <td><?php echo $fila['fecha_creacion']; ?></td>
            <td><?php echo $fila['completada'] ? "✅ Completada" : "⏳ Pendiente"; ?></td>
            <td>
                <a href="editar_tarea.php?id=<?php echo $fila['id']; ?>">✏️ Editar</a> |
                <a href="eliminar_tarea.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Eliminar esta tarea?')">🗑️ Eliminar</a> |
                <?php if (!$fila['completada']) { ?>
                    <a href="completar_tarea.php?id=<?php echo $fila['id']; ?>">✔️ Marcar como completada</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

    </table>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
    
</body>
</html>