<?php
$host = "localhost"; 
$dbname = "newsletter_db"; 
$username = "root"; 
$password = ""; // Laisse vide sous XAMPP ou Laragon

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

