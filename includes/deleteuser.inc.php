<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    try {
        require_once "db.inc.php";
        $query = "DELETE FROM users WHERE name = ?;";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        $pdo = null;
        $stmt = null;

        header("Location: ../success.php");
        die();
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
