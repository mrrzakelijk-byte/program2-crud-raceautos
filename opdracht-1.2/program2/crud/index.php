<?php
require __DIR__ . '/config.php';
$query = 'SELECT ID, merk, model FROM raceautos ORDER BY ID';
$stmt = $pdo->prepare($query);
$stmt->execute();
$autos = $stmt->fetchAll(PDO::FETCH_ASSOC);
include __DIR__ . '/views/index_view.php';
