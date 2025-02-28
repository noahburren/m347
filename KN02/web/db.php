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
$sql = "select Host, User from mysql.user;";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
                echo("<li>" . $row["Host"] . " / " . $row["User"] . "</li>");
        }
?>
