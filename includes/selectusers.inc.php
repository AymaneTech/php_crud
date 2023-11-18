<?php

try {
    require_once "db.inc.php";

    $query = "SELECT * FROM users;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
} catch (Exception $e) {
    echo "connect failed" . $e->getMessage();
}

