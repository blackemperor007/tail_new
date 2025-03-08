<?php
require '../../config/database.php';

$email = "test@example.com";
$name = "Test User";
$token = bin2hex(random_bytes(16));

$query = $pdo->prepare("INSERT INTO subscribers (email, name, token) VALUES (?, ?, ?)");
$query->execute([$email, $name, $token]);

echo "Abonné ajouté avec succès !";
?>
    