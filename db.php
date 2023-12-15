<?php
try {
    $set = $_ENV['DB_DSN'];
    $db = new PDO($_ENV['DB_DSN'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch (PDOException $e) {
    die("Connection failed:" . $e->getMessage());
}

