<?php
$host = "mysql.hostinger.com"; // Remplace par l'hôte donné par Hostinger
$dbname = "u903207707_abotracking_db"; // Remplace par le nom de ta base de données
$username = "u903207707_aboAdmin"; // Remplace par ton identifiant
$password = "aboAdmin@123"; // Remplace par ton mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
