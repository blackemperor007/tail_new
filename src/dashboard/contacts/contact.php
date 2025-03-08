<?php
// Connexion à la base de données
require 'config/database.php';

$message = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les valeurs du formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message_contact = trim($_POST['message']);

    // Validation des données
    if (!empty($nom) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message_contact)) {
        try {
            // Insérer les données dans la base de données
            $query = $pdo->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
            $query->execute([$nom, $email, $message_contact]);

            // Message de succès
            $message = "✅ Votre message a été envoyé avec succès !";
        } catch (PDOException $e) {
            // En cas d'erreur
            $message = "❌ Erreur : " . $e->getMessage();
        }
    } else {
        $message = "❌ Veuillez remplir tous les champs correctement.";
    }
}
?>