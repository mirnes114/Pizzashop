<!DOCTYPE html>
<html>
<head>
    <title>Pizza Bestellung</title>
</head>
<body>
    <?php
    include "dB_connect.php";
    include "Page2.html";

    
    // POST-Daten abrufen
    $vorname = $_POST["Vorname"];
    $nachname = $_POST["Nachname"];
    $adresse = $_POST["Adresse"];
    $plz = $_POST["PLZ"];
    $ort = $_POST["Ort"];
    $telefonnummer = $_POST["Telefonnummer"];
    $email = $_POST["E-Mail"];
    $groesse = $_POST["Groesse"];
    $art = $_POST["Art"];
    $anzahl = $_POST["Anzahl"];
	$getraenke = $_POST["Getraenke"];
	$anzahlGetraenke = $_POST["Anzahl_Getraenke"];
    $toppings = $_POST["toppings"];
    

    // Datenbank befüllen
    $eintrag = "INSERT INTO $link 
                (Vorname, Nachname, Adresse, PLZ, Ort, Telefonnummer, ZusätzlicheHinweise, 
                Größe, Art, Anzahl, Toppings, Getraenke, Anzahl_Getraenke)
                VALUES 
                ('$vorname', '$nachname', '$adresse', '$plz', '$ort', '$telefonnummer', 
                '$email', '$groesse', '$art', '$anzahl', '$toppings', '$getraenke', '$anzahlGetraenke')";

    $eintragen = mysqli_query($conn, $eintrag);

    if($eintragen) {
        echo "<h2>Vielen Dank für Ihre Bestellung!</h2>";
        echo "<p>Ihre Bestellung wurde erfolgreich gespeichert.</p>";
        echo "<p>Bestelldetails:</p>";
        echo "<ul>";
        echo "<li>Name: $vorname $nachname</li>";
        echo "<li>Adresse: $adresse, $plz $ort</li>";
        echo "<li>Pizza: $art ($groesse)</li>";
        echo "<li>Anzahl: $anzahl</li>";
        echo "<li>Zusätzliche Toppings: $toppings</li>";
        echo "<li>Getränke: $getraenke</li>";
        echo "<li>Anzahl Getränke: $anzahlGetraenke</li>";
        echo "</ul>";
    } else {
        echo "Fehler beim Speichern der Bestellung: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

    <p><a href="index.html">Zurück zum Bestellformular</a></p>
</body>
</html>