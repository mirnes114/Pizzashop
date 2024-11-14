<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Pizzashop";
$link = "Formular";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}
?>