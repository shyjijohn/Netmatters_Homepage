<?php

$env = parse_ini_file(__DIR__ . '/../.env');

$host = $env['DB_HOST'];
$port = $env['DB_PORT'];
$db   = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}