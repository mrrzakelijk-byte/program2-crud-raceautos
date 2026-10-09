<?php
require __DIR__ . '/config.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$auto = false;
if ($id !== false && $id !== null && $id > 0) {
    $stmt = $pdo->prepare('SELECT * FROM raceautos WHERE ID = :id');
    $stmt->execute(['id' => $id]);
    $auto = $stmt->fetch(PDO::FETCH_ASSOC);
}
include __DIR__ . '/views/detail_view.php';
