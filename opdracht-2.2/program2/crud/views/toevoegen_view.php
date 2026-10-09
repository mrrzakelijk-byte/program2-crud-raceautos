<!DOCTYPE html>
<html lang="nl">
<head><meta charset="UTF-8"><title>Raceauto toevoegen</title><link rel="stylesheet" href="style.css"></head>
<body>

<h1>Raceauto toevoegen</h1>
<form action="toevoegen_verwerk.php" method="post">
<input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
<label for="merk">Merk</label>
<input id="merk" type="text" name="merkVeld" maxlength="50" required>
<label for="model">Model</label>
<input id="model" type="text" name="modelVeld" maxlength="60" required>
<label for="bouwjaar">Bouwjaar</label>
<input id="bouwjaar" type="number" name="bouwjaarVeld" min="1950" max="2100" required>
<label for="topsnelheid">Topsnelheid in km/u</label>
<input id="topsnelheid" type="number" name="topsnelheidVeld" min="1" max="600" required>
<label for="vermogen">Vermogen in pk</label>
<input id="vermogen" type="number" name="vermogenVeld" min="1" max="2500" required>
<label for="raceklasse">Raceklasse</label>
<input id="raceklasse" type="text" name="raceklasseVeld" maxlength="50" required>
<button type="submit">Toevoegen</button>
</form>
<p><a href="index.php">Terug naar overzicht</a></p>
</body></html>
