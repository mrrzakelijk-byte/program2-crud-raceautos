<?php
require __DIR__ . '/config.php';
$gelukt = false;
$foutmelding = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $merk = $_POST['merkVeld'] ?? '';
    $model = $_POST['modelVeld'] ?? '';
    $bouwjaar = $_POST['bouwjaarVeld'] ?? '';
    $topsnelheid = $_POST['topsnelheidVeld'] ?? '';
    $vermogen = $_POST['vermogenVeld'] ?? '';
    $raceklasse = $_POST['raceklasseVeld'] ?? '';
    try {
        $query = 'INSERT INTO raceautos
          (merk, model, bouwjaar, topsnelheid, vermogen, raceklasse)
          VALUES (:merk, :model, :bouwjaar, :topsnelheid, :vermogen, :raceklasse)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'merk' => $merk, 'model' => $model, 'bouwjaar' => $bouwjaar,
            'topsnelheid' => $topsnelheid, 'vermogen' => $vermogen, 'raceklasse' => $raceklasse
        ]);
        $gelukt = $stmt->rowCount() > 0;
        if (!$gelukt) $foutmelding = 'Toevoegen is niet gelukt.';
    } catch (PDOException $e) {
        $foutmelding = 'De raceauto kon niet worden opgeslagen.';
    }
} else {
    $foutmelding = 'Gebruik eerst het toevoegformulier.';
}
include __DIR__ . '/views/toevoegen_verwerk_view.php';
