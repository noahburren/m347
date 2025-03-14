<?php
$host = 'm347-kn04a-db';
$user = 'user';
$pass = 'password';
$db = 'mydatabase';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "Verbindung erfolgreich zur Datenbank!";
?>