<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación de Mensajes</title>
</head>
<body>
    <h1>Bienvenido a la Aplicación de Mensajes</h1>

    <!-- Formulario para insertar un mensaje -->
    <h2>Enviar un Mensaje</h2>
    <form action="insert.php" method="post">
        <textarea name="content" placeholder="Escribe tu mensaje aquí..." required></textarea><br>
        <button type="submit">Enviar Mensaje</button>
    </form>

    <!-- Mostrar todos los mensajes -->
    <h2>Mensajes</h2>
    <?php
    $db = connect();
    $stmt = $db->query("SELECT * FROM mensajes ORDER BY creado_en DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($messages) {
        foreach ($messages as $message) {
            echo "<p><strong>Mensaje:</strong> {$message['texto']} <br><small><em>Fecha:</em> {$message['creado_en']}</small></p>";
        }
    } else {
        echo "<p>No hay mensajes para mostrar.</p>";
    }
    ?>
</body>
</html>
