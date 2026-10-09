-- Selecteer eerst de database 123456_PROGRAM1 (vervang 123456 door studentnummer).
CREATE TABLE IF NOT EXISTS raceautos (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    merk VARCHAR(50) NOT NULL,
    model VARCHAR(60) NOT NULL,
    bouwjaar SMALLINT UNSIGNED NOT NULL,
    topsnelheid SMALLINT UNSIGNED NOT NULL,
    vermogen SMALLINT UNSIGNED NOT NULL,
    raceklasse VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Oefengegevens, geen officiële specificaties.
INSERT INTO raceautos (merk, model, bouwjaar, topsnelheid, vermogen, raceklasse) VALUES
('Porsche', '911 GT3 R', 2023, 290, 565, 'GT3'),
('Ferrari', '296 GT3', 2023, 285, 600, 'GT3'),
('BMW', 'M4 GT3', 2022, 280, 590, 'GT3'),
('Lamborghini', 'Huracan GT3 EVO2', 2023, 285, 550, 'GT3'),
('Mercedes-AMG', 'GT3', 2020, 280, 550, 'GT3');
