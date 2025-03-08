<?php
require 'config/database.php';

try {
    $query = $pdo->query("SELECT 'Connexion réussie !' AS message");
    $result = $query->fetch();
    echo $result['message'];
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
