<?php
$host = 'kn02b-db'; // Name des DB-Containers
$user = 'root';
$pass = 'root';
$dbname = 'mydb';

// Verbindung zur Datenbank
$conn = new mysqli($host, $user, $pass, $dbname);

// Prüfen, ob die Verbindung funktioniert
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "Erfolgreich mit der Datenbank verbunden!";
?>
