<?php
function connect() {
    $host = 'mysql-db';
    $user = 'user';
    $pass = 'password';
    $dbname = "mensajes_db";

    try {
        return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
}
?>
