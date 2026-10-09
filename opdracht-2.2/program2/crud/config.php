<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (!file_exists(__DIR__ . '/config.local.php')) {
    exit('Maak eerst config.local.php aan (kopieer config.local.example.php).');
}
$gegevens = require __DIR__ . '/config.local.php';
try {
    $dsn = 'mysql:host=' . $gegevens['host'] . ';port=' . $gegevens['port'] .
           ';dbname=' . $gegevens['database'] . ';charset=utf8mb4';
    $pdo = new PDO($dsn, $gegevens['username'], $gegevens['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('Databaseverbinding mislukt. Controleer config.local.php.');
}
