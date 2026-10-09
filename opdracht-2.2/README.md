# Opdracht 2.2 — Formuliercontrole en validatie

Deze map bevat alle bestanden die je tot en met deze opdracht nodig hebt.

1. Open deze map in PhpStorm.
2. Start MAMP met Apache en MySQL.
3. Maak database `123456_PROGRAM1` (studentnummer invullen) via phpMyAdmin.
4. Selecteer de database en importeer `program2/crud/database.sql` **één keer**. Opnieuw importeren verdubbelt de vijf voorbeeldrecords.
5. Kopieer `program2/crud/config.local.example.php` naar `program2/crud/config.local.php` en vul MySQL-gegevens in.
6. Stel de MAMP Document Root in op `program2/crud`. Open `http://localhost:8888/test_connectie.php` (of je eigen Apache-poort).
7. Open `index.php` voor het overzicht en `detail.php?id=1` voor de details.
8. Open `toevoegen.php` om een raceauto toe te voegen.
9. Controleer dat ontbrekende of ongeldige waarden geen INSERT uitvoeren.

GitHub Pages kan PHP niet uitvoeren. GitHub bewaart alleen de code; MAMP voert die lokaal uit.
