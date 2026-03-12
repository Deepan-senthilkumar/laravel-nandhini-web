<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=nandhini_silks", "root", "");
    echo "Connected successfully\n";
    $stmt = $pdo->query("SELECT VERSION()");
    echo "MySQL Version: " . $stmt->fetchColumn() . "\n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
