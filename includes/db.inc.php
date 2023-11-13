<?php
    $dsn = "mysql:host=localhost; dbname=dani_crossing";
    $dbusername = "root";
    $dbpwd = "";
    
    try{
        $pdo = new PDO ($dsn, $dbusername, $dbpwd);
        $pdo->setAttribute(PDO ::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo "connected failed: ". $e->getMessage();
    }
