<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "db.inc.php";
        $query = "INSERT INTO users (name, pwd, email) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password, $email]);

        $pdo = null;
        $stmt = null;

        header("LOcation: ../index.php");
        die();
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
