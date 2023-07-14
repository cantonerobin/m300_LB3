<?php
// Umgebungsvariablen aus der .env-Datei laden
$host = getenv('MYSQL_HOST');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

// MySQL-Verbindung herstellen
$conn = new mysqli($host, $user, $pass, $database);

// Überprüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung zur MySQL-Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// SELECT-Abfrage ausführen
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    $users = $result->fetch_all(MYSQLI_ASSOC);

    // Benutzerdaten anzeigen
    foreach ($users as $user) {
        echo "<br>";
        echo $user['username'] . " " . $user['password'];
        echo "<br>";
    }

    $result->free();
}

// MySQL-Verbindung schließen
$conn->close();
?>
