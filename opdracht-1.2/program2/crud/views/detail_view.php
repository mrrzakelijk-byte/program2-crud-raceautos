<!DOCTYPE html>
<html lang="nl">
<head><meta charset="UTF-8"><title>Raceauto - details</title><link rel="stylesheet" href="style.css"></head>
<body>

<h1>Details raceauto</h1>
<?php if ($auto): ?>
<table>
<tr><th>ID</th><td><?= (int) $auto['ID'] ?></td></tr>
<tr><th>Merk</th><td><?= htmlspecialchars($auto['merk'], ENT_QUOTES, 'UTF-8') ?></td></tr>
<tr><th>Model</th><td><?= htmlspecialchars($auto['model'], ENT_QUOTES, 'UTF-8') ?></td></tr>
<tr><th>Bouwjaar</th><td><?= (int) $auto['bouwjaar'] ?></td></tr>
<tr><th>Topsnelheid</th><td><?= (int) $auto['topsnelheid'] ?> km/u</td></tr>
<tr><th>Vermogen</th><td><?= (int) $auto['vermogen'] ?> pk</td></tr>
<tr><th>Raceklasse</th><td><?= htmlspecialchars($auto['raceklasse'], ENT_QUOTES, 'UTF-8') ?></td></tr>
</table>
<?php else: ?><p>Deze raceauto bestaat niet.</p><?php endif; ?>
<p><a href="index.php">Terug naar overzicht</a></p>
</body></html>
