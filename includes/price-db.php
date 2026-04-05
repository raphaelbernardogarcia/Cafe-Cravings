<?php
$dsn = "mysql:host=localhost;dbname=website";
$dbusername = "root";
$dbpassword = "";


try {
    //code...
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION)
} catch (PDOException $e) {
    //throw $th;
    echo "Connection failed: " . $e->getMessage();
}

