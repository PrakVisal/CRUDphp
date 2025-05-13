<?php
$host = "https://crudphp-5sr3.onrender.com";
$dbname = "testdb";
$user = "postgres";
$pass = "123";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
