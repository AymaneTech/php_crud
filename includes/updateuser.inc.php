<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    echo "new name is : {$username}";
    try {
        require_once "db.inc.php";
        $query = "UPDATE users SET name = ?, pwd = ?, email = ? WHERE id = 2;";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password, $email]);

        $pdo = null;
        $stmt = null;

        // header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    echo "hello";
    // header("Location: ../index.php");
}
