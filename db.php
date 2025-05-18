<?php
$host = "sql111.infinityfree.com";
$dbname = "if0_39015792_phpcrud";
$user = "if0_39015792";
$pass = "Visal03072004";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
