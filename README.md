# PROGRAM2 CRUD — Raceauto's

Vier schoolopdrachten, apart opgeslagen in de mappen `opdracht-1.1`, `opdracht-1.2`, `opdracht-2.1` en `opdracht-2.2`. Elke map is een volledige werkversie tot en met die opdracht.

## Opstarten met PhpStorm en MAMP (Mac)

1. Download en installeer [MAMP](https://www.mamp.info/) en start Apache en MySQL.
2. Clone deze repository in PhpStorm via **Get from VCS**: `https://github.com/mrrzakelijk-byte/program2-crud-raceautos.git`.
3. Open in MAMP **WebStart → phpMyAdmin** en maak de database `123456_PROGRAM1` (vervang `123456` door je eigen studentnummer). De losse opdracht op p. 48 gebruikt `PROGRAM1`.
4. Selecteer de database en importeer **één keer** `opdracht-2.2/program2/crud/database.sql`.
5. Kopieer in de gekozen opdrachtmap `program2/crud/config.local.example.php` naar `program2/crud/config.local.php`, vul jouw eigen databasenaam en MAMP MySQL-gegevens in.
6. Selecteer in MAMP als Document Root de map `opdracht-2.2/program2/crud` (of de corresponderende map van een andere opdracht). Open `http://localhost:8888/test_connectie.php` en daarna `http://localhost:8888/index.php` (afhankelijk van je Apache-poort).

**BELANGRIJK:** `config.local.php` bevat privé-inloggegevens en mag **niet** naar GitHub. Deze naam wordt door `.gitignore` uitgesloten. GitHub Pages kan geen PHP of MySQL uitvoeren; lokaal test je via MAMP.

| Opdracht | Wat je maakt | Testen |
| --- | --- | --- |
| 1.1 | Database, vijf raceauto's, PDO-verbinding | `test_connectie.php` |
| 1.2 | Overzichtspagina en detailpagina | `index.php` |
| 2.1 | Raceauto toevoegen | `toevoegen.php` |
| 2.2 | Controle formulier, CSRF, foutmeldingen | `toevoegen.php` (test ook verkeerde waarden) |

De echte MySQL-verbinding moet op jouw eigen computer met MAMP worden getest. PHP-syntaxis is gecontroleerd.
