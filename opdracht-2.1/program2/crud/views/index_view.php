<!DOCTYPE html>
<html lang="nl">
<head><meta charset="UTF-8"><title>Raceauto's - overzicht</title><link rel="stylesheet" href="style.css"></head>
<body>

<h1>Raceauto's</h1>
<p>Overzicht van raceauto's uit de database.</p>
<p><a href="toevoegen.php">Nieuwe raceauto toevoegen</a></p>
<table>
<tr><th>Merk</th><th>Model</th><th>Actie</th></tr>
<?php foreach ($autos as $auto): ?>
<tr><td><?= htmlspecialchars($auto['merk'], ENT_QUOTES, 'UTF-8') ?></td>
<td><?= htmlspecialchars($auto['model'], ENT_QUOTES, 'UTF-8') ?></td>
<td><a href="detail.php?id=<?= (int) $auto['ID'] ?>">Details</a></td></tr>
<?php endforeach; ?>
</table>
<?php if (count($autos) === 0): ?><p>Er staan nog geen raceauto's in de database.</p><?php endif; ?>
</body></html>
