<?php

if ($_SERVER["REQUEST_METHOD"] = "POST") {

    $username = $_POST["usersearch"];

    try {
        require_once("includes/db.inc.php");

        $query = "SELECT * FROM users WHERE name = ?;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);;

        $pdo = null;
        $stmt = null;
    } catch (Exception $e) {
        echo "connected failed" . $e->getMessage();
    }
} else {
    header("Location: ./search.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>search results</h3>
    <?php
    if (empty($results)) {
        echo "there no account with this name";
    } else {
        echo "{$results[0]["name"]} <br>";
        echo "{$results[0]["email"]} <br>";
        echo $results[0]["pwd"];

    }
    ?>

</body>

</html>