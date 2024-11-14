CREATE TABLE bestellungen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Vorname VARCHAR(255),
    Nachname VARCHAR(255),
    Adresse VARCHAR(255),
    PLZ VARCHAR(255),
    Ort VARCHAR(255),
    Telefonnummer VARCHAR(255),
    ZusätzlicheHinweise VARCHAR(255),
    Größe VARCHAR(255),
    Art VARCHAR(255),
    Anzahl INT,
    Toppings VARCHAR(255),
    Getraenke VARCHAR(255),
    Anzahl_Getraenke INT
); 