<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST['content'];
    $db = connect();
    $stmt = $db->prepare("INSERT INTO mensajes (texto) VALUES (:texto)");
    $stmt->execute(['content' => $content]);
    echo "Message added!";
}
?>
<form method="post">
    <textarea name="content" required></textarea>
    <button type="submit">Send Message</button>
</form>
