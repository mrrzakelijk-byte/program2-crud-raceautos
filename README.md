# PROGRAM2 — Raceauto's

Dit project bevat **4 aparte opdrachten**, elk een zelfstandige versie met de eerdere opdrachten erbij:

- [Opdracht 1.1 — Database en PDO](opdracht-1.1/README.md)
- [Opdracht 1.2 — Overzicht en details](opdracht-1.2/README.md)
- [Opdracht 2.1 — Toevoegen](opdracht-2.1/README.md)
- [Opdracht 2.2 — Formuliercontrole](opdracht-2.2/README.md)

## Openen in PhpStorm

1. Kies **Get from VCS** en clone: `https://github.com/mrrzakelijk-byte/program2-crud-raceautos.git`.
2. Installeer en start MAMP (Apache + MySQL).
3. Maak in MAMP/phpMyAdmin een database, bijvoorbeeld `123456_PROGRAM1` (studentnummer vervangen).
4. Importeer **eenmalig** `opdracht-2.2/program2/crud/database.sql` in die database. De SQL bevat vijf voorbeeldauto's.
5. Kopieer `opdracht-2.2/program2/crud/config.local.example.php` naar `config.local.php` in dezelfde map en vul databasegegevens in. **Nooit je wachtwoord in GitHub opslaan.**
6. Kies in MAMP bij Document Root de map `opdracht-2.2/program2/crud` en open `http://localhost:8888/test_connectie.php` of jouw ingestelde Apache-poort.
7. Open `http://localhost:8888/index.php` voor de volledige app. Gebruik de andere opdrachtmappen als je een eerdere versie apart wilt demonstreren.

GitHub Pages draait geen PHP/MySQL: de website werkt via MAMP op je eigen computer. De databaseverbinding moet daar nog getest worden.
