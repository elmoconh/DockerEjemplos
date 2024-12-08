<?php
$db = connect();
$stmt = $db->query("SELECT * FROM mensajes ORDER BY creado_en DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($messages as $message) {
    echo "<p>{$message['content']} ({$message['creado_en']})</p>";
}
?>
