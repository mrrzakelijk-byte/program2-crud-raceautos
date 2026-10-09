<?php
session_start();
$gelukt = false;
$fouten = [];
$waarden = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $fouten[] = 'Gebruik eerst het toevoegformulier.';
} else {
    $token = $_POST['csrf_token'] ?? '';
    if (!is_string($token) || !isset($_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $token)) {
        $fouten[] = 'Het formulier komt niet van de juiste pagina. Probeer opnieuw.';
    }

    $velden = ['merkVeld', 'modelVeld', 'bouwjaarVeld',
               'topsnelheidVeld', 'vermogenVeld', 'raceklasseVeld'];
    foreach ($velden as $veld) {
        if (!isset($_POST[$veld]) || !is_string($_POST[$veld])) {
            $fouten[] = 'Een verplicht veld ontbreekt: ' . $veld;
        } else {
            $waarden[$veld] = trim($_POST[$veld]);
            if ($waarden[$veld] === '') $fouten[] = 'Vul ' . $veld . ' in.';
        }
    }

    if (count($fouten) === 0) {
        $teksten = ['merkVeld' => 50, 'modelVeld' => 60, 'raceklasseVeld' => 50];
        foreach ($teksten as $veld => $lengte) {
            if (strlen($waarden[$veld]) > $lengte) $fouten[] = $veld . ' is te lang.';
            if (trim(strip_tags($waarden[$veld])) === '') {
                $fouten[] = $veld . ' bevat geen geldige tekst.';
            }
        }
        $getallen = [
            'bouwjaarVeld' => [1950, (int) date('Y') + 1],
            'topsnelheidVeld' => [1, 600],
            'vermogenVeld' => [1, 2500]
        ];
        foreach ($getallen as $veld => $grenzen) {
            if (!ctype_digit($waarden[$veld]) ||
                filter_var($waarden[$veld], FILTER_VALIDATE_INT,
                ['options' => ['min_range' => $grenzen[0], 'max_range' => $grenzen[1]]]) === false) {
                $fouten[] = $veld . ' moet een geldig heel getal zijn.';
            }
        }
    }

    if (count($fouten) === 0) {
        $merk = trim(strip_tags($waarden['merkVeld']));
        $model = trim(strip_tags($waarden['modelVeld']));
        $raceklasse = trim(strip_tags($waarden['raceklasseVeld']));
        require __DIR__ . '/config.php';
        try {
            $query = 'INSERT INTO raceautos
                (merk, model, bouwjaar, topsnelheid, vermogen, raceklasse)
                VALUES (:merk, :model, :bouwjaar, :topsnelheid, :vermogen, :raceklasse)';
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'merk' => $merk, 'model' => $model,
                'bouwjaar' => (int) $waarden['bouwjaarVeld'],
                'topsnelheid' => (int) $waarden['topsnelheidVeld'],
                'vermogen' => (int) $waarden['vermogenVeld'],
                'raceklasse' => $raceklasse
            ]);
            $gelukt = $stmt->rowCount() > 0;
            if (!$gelukt) $fouten[] = 'Toevoegen is niet gelukt.';
        } catch (PDOException $e) {
            $fouten[] = 'De raceauto kon niet worden opgeslagen.';
        }
    }
}
include __DIR__ . '/views/toevoegen_verwerk_view.php';
