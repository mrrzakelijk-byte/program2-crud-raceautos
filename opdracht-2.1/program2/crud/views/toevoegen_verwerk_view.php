<!DOCTYPE html>
<html lang="nl">
<head><meta charset="UTF-8"><title>Resultaat toevoegen</title><link rel="stylesheet" href="style.css"></head>
<body>

<h1>Raceauto toevoegen</h1>
<?php if ($gelukt): ?><p>De raceauto is toegevoegd!</p>
<?php else: ?><p class="fout"><?= htmlspecialchars($foutmelding, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
<p><a href="index.php">Terug naar overzicht</a></p>
<p><a href="toevoegen.php">Nog een raceauto toevoegen</a></p>
</body></html>
